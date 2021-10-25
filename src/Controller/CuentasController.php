<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
use Cake\Event\Event;

class CuentasController extends AppController
{
   public function index(){

        $this->loadModel('Cuentas');
    
        $nueva_cuenta = $this->Cuentas->newEntity();
        if ($this->request->is('post')) {
            $nueva_cuenta = $this->Cuentas->patchEntity($nueva_cuenta, $this->request->getData());
            $nueva_cuenta->id_usuario = @$this->request->session()->read("Auth.User.id");

            if ($this->Cuentas->save($nueva_cuenta)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('The record could not be saved. Try again.'));
            
        }
        $this->set(compact('nueva_cuenta'));

        //============================================================================================

        $this->loadModel('Bancos');

        $bancos = $this->Bancos->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($bancos as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('bancos', $options);

        //============================================================================================
         
        $this->loadModel('ViewCuentas');
        $cuentas = $this->paginate($this->ViewCuentas->find('all')->order(['banco' => 'ASC']));
        $this->set(compact('cuentas'));
        
    }

    public function editar()
    {

        $this->loadModel('Cuentas');
        $this->request->allowMethod(['post', 'get', 'save']);
        $cuentas = @$this->Cuentas->get($this->request->data['id']);
        $cuentas->banco = @$this->request->data['banco'];
        $cuentas->numero_cuenta = @$this->request->data['numero_cuenta'];
        $cuentas->tipo_cuenta = @$this->request->data['tipo_cuenta'];
        $cuentas->cedula = @$this->request->data['cedula'];
        $cuentas->responsable = @$this->request->data['responsable'];
        $cuentas->telefono = @$this->request->data['telefono'];
        $cuentas->correo = @$this->request->data['correo'];

        if ($this->Cuentas->save($cuentas)) {
            $this->Flash->success(__('It has been successfully modified.'));
        } else {
            $this->Flash->error(__('Error. Try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null)
    {
        $this->loadModel('Carrito');
        $n = $this->Carrito->find('all')->where(['id_cuenta' => $id])->count();

        if($n == 0){
            $this->loadModel('Cuentas');
            $this->request->allowMethod(['post', 'delete']);
            $cuentas = $this->Cuentas->get($id);
            if ($this->Cuentas->delete($cuentas)) {
                $this->Flash->success(__('It has been removed successfully.'));
            } else {
                $this->Flash->error(__('Could not be removed. Try again.'));
            }
        }else{
            $this->Flash->info(__('Impossible to remove. This account is in history'));
        }

        return $this->redirect(['action' => 'index']);
    }    
}