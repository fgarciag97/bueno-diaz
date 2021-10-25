<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsuariosController extends AppController
{

	public function beforeFilter(Event $event){
        parent::beforeFilter($event);
    } 

    public function admin(){
    	$this->loadModel('Usuarios');
        $admin = $this->paginate($this->Usuarios->find('all')->where(['privilegio' => 1]));
        $this->set(compact('admin'));

        //============================================================

        $this->loadModel('Usuarios');
        $agregar = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $agregar = $this->Usuarios->patchEntity($agregar, $this->request->getData());

            $agregar->activo = 1;
	        $agregar->fecha_registro = date('d-m-Y');
	        $agregar->privilegio = 1;
            $agregar->correo = strtoupper($agregar->correo);
            $agregar->cedula = @$this->request->data['id'];
            $agregar->letra = 'V';
	        $n = $this->Usuarios->find('all')->where(['correo' => $agregar->correo])->count();

	        if($n != 0){
	            $this->Flash->error(__('A registered user already exists'));
	            return $this->redirect(['action' => 'admin']);
	        }

            if ($this->Usuarios->save($agregar)) {
                $this->Flash->success(__('The record has been saved'));

                return $this->redirect(['action' => 'admin']);
            }else{
                $this->Flash->error(__('Registration failed to save. Try again.'));
            }
        }
    }

    public function clientes(){
    	$this->loadModel('Usuarios');
        $clientes = $this->paginate($this->Usuarios->find('all')->where(['privilegio' => 2])->order(['id' => 'DESC']));
        $this->set(compact('clientes'));

        //============================================================

        $this->loadModel('Usuarios');
        $agregar = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $agregar = $this->Usuarios->patchEntity($agregar, $this->request->getData());

            $agregar->activo = 1;
	        $agregar->fecha_registro = date('d-m-Y');
	        $agregar->privilegio = 2;
            $agregar->correo = strtoupper($agregar->correo);
            $agregar->cedula = @$this->request->data['id'];
            $agregar->letra = 'V';


	        $n = $this->Usuarios->find('all')->where(['correo' => $agregar->correo])->count();

	        if($n != 0){
	            $this->Flash->error(__('A registered user already exists'));
	            return $this->redirect(['action' => 'clientes']);
	        }

            if ($this->Usuarios->save($agregar)) {
                $this->Flash->success(__('The record has been saved'));

                return $this->redirect(['action' => 'clientes']);
            }else{
                $this->Flash->error(__('Registration failed to save. Try again.'));
            }
        }
    }

    public function deletea($id = null){
        $this->request->allowMethod(['post', 'delete']);

        //$this->loadModel('Galpones');
        //$n = count($this->Galpones->find('all', ['conditions' => ['id_usuario' => $id]])->toArray());

            //if($n==0){
        		$this->loadModel('Usuarios');
                $usuario = $this->Usuarios->get($id);
                if ($this->Usuarios->delete($usuario)) {
                    $this->Flash->success(__('The record has been deleted.'));
                } else {
                    $this->Flash->error(__('The record could not be deleted. Try again.'));
                }
            //}else{
                //$this->Flash->error(__('Imposible Eliminar. Algunos Registros dependen del mismo'));
            //}

        return $this->redirect(['action' => 'admin']);
    }

    public function deletec($id = null){
        $this->request->allowMethod(['post', 'delete']);

        //$this->loadModel('Galpones');
        //$n = count($this->Galpones->find('all', ['conditions' => ['id_usuario' => $id]])->toArray());

            //if($n==0){
        		$this->loadModel('Usuarios');
                $usuario = $this->Usuarios->get($id);
                if ($this->Usuarios->delete($usuario)) {
                    $this->Flash->success(__('The record has been deleted.'));
                } else {
                    $this->Flash->error(__('The record could not be deleted. Try again.'));
                }
            //}else{
                //$this->Flash->error(__('Impossible to Delete. Some Registers depend on it.'));
            //}

        return $this->redirect(['action' => 'clientes']);
    }

    public function edita()
    {
        $this->loadModel('Usuarios');
        $this->request->allowMethod(['post', 'get', 'save']);

        $usuario = $this->Usuarios->get(@$this->request->data['id']);

        $usuario->nombres = @$this->request->data['nombres'];
        $usuario->movil = @$this->request->data['movil'];
        $usuario->password = @$this->request->data['password'];
        $usuario->direccion = @$this->request->data['direccion'];
        $usuario->correo = @strtoupper($this->request->data['correo']);

        if ($this->Usuarios->save($usuario)) {
            $this->Flash->success(__('Modified'));
        } else {
            $this->Flash->error(__('Error. Try again'));
        }

        return $this->redirect(['action' => 'admin']);
        
    }

    public function editc()
    {
        $this->loadModel('Usuarios');
        $this->request->allowMethod(['post', 'get', 'save']);

        $usuario = $this->Usuarios->get(@$this->request->data['id']);

        $usuario->cedula = @$this->request->data['cedula'];
        $usuario->nombres = @$this->request->data['nombres'];
        $usuario->apellidos = @$this->request->data['apellidos'];
        $usuario->correo = @strtoupper($this->request->data['correo']);
        $usuario->password = @$this->request->data['password'];
        $usuario->movil = @$this->request->data['movil'];
        $usuario->direccion = @$this->request->data['direccion'];
        $usuario->city = @$this->request->data['city'];
        $usuario->state = @$this->request->data['state'];
        $usuario->code = @$this->request->data['code'];
        $usuario->movil = @$this->request->data['movil'];
        $usuario->fijo = @$this->request->data['fijo'];
        $usuario->movil2 = @$this->request->data['movil2'];
        $usuario->company = @$this->request->data['company'];
        $usuario->nota = @$this->request->data['nota'];
        $usuario->privilegio = @$this->request->data['privilegio'];

        if ($this->Usuarios->save($usuario)) {
            $this->Flash->success(__('Modified'));
        } else {
            $this->Flash->error(__('Error. Try again'));
        }

        return $this->redirect(['action' => 'clientes']);
        
    }

    public function condiciona($id = null, $estado = null){

        $this->loadModel('Usuarios');
        $query = $this->Usuarios->query();
        $query->update()
            ->set(['estatus' => $estado])
            ->where(['id' => $id])
            ->execute();

        return $this->redirect(['action' => 'admin']);
    }

    public function condicionc($id = null, $estado = null){

        $this->loadModel('Usuarios');
        $query = $this->Usuarios->query();
        $query->update()
            ->set(['estatus' => $estado])
            ->where(['id' => $id])
            ->execute();

        return $this->redirect(['action' => 'clientes']);
    }
    
}
