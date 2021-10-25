<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
use Cake\Event\Event;

class GruposController extends AppController
{
   public function index(){

        $this->loadModel('Grupos');
        $grupos = $this->paginate($this->Grupos->find('all')->order(['id' => 'ASC']));
        $this->set(compact('grupos'));

        $agregar = $this->Grupos->newEntity();
        if ($this->request->is('post')) {
            $agregar = $this->Grupos->patchEntity($agregar, $this->request->getData());

            if ($this->Grupos->save($agregar)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('The record could not be saved. Try again.'));
            }
        }
        $this->set(compact('agregar'));
        
    }

    public function editar()
    {
        $this->loadModel('Grupos');
        $this->request->allowMethod(['post', 'get', 'save']);
        $grupo = @$this->Grupos->get($this->request->data['id']);
        $grupo->denominacion = @$this->request->data['denominacion'];

        if ($this->Grupos->save($grupo)) {
            $this->Flash->success(__('It has been successfully modified.'));
        } else {
            $this->Flash->error(__('Error. Try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null)
    {
        $this->loadModel('Productos');
        $n = $this->Productos->find('all')->where(['id_grupo' => $id])->count();

        if($n == 0){
            $this->loadModel('Grupos');
            $this->request->allowMethod(['post', 'delete']);
            $Grupos = $this->Grupos->get($id);
            if ($this->Grupos->delete($Grupos)) {
                $this->Flash->success(__('It has been removed successfully.'));
            } else {
                $this->Flash->error(__('Could not be removed. Try again.'));
            }
        }else{
            $this->Flash->info(__('Error. Many products dependent on this group'));
        }
            return $this->redirect(['action' => 'index']);
    }


    public function editarfoto()
    {
        $this->loadModel('Grupos');
        $this->request->allowMethod(['post', 'get', 'save']);
        $f = @$this->Grupos->get($this->request->data['id']);
        $f->photo = @$this->request->data['photo'];

        if ($this->Grupos->save($f)) {
            $this->Flash->success(__('It has been successfully modified'));
        } else {
            $this->Flash->error(__('Error. Try again'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function sub(){

        $this->loadModel('ViewSub');
        $sub = $this->paginate($this->ViewSub->find('all')->order(['id' => 'ASC']));
        $this->set(compact('sub'));


        $this->loadModel('Subcategorias');
        $agregar = $this->Subcategorias->newEntity();
        if ($this->request->is('post')) {
            $agregar = $this->Subcategorias->patchEntity($agregar, $this->request->getData());

            if ($this->Subcategorias->save($agregar)) {
                $this->Flash->success(__('The record has been saved.'));

                return $this->redirect(['action' => 'sub']);
            }else{
                $this->Flash->error(__('The record could not be saved. Try again.'));
            }
        }
        $this->set(compact('agregar'));


        //============================================================================================

        $this->loadModel('Grupos');

        $grupos = $this->Grupos->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($grupos as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('grupos', $options);

        //============================================================================================
        
    }


    public function editarsub()
    {
        $this->loadModel('Subcategorias');
        $this->request->allowMethod(['post', 'get', 'save']);
        $grupo = @$this->Subcategorias->get($this->request->data['id']);
        $grupo->id_grupos = @$this->request->data['id_grupos'];
        $grupo->denominacion = @$this->request->data['denominacion'];

        if ($this->Subcategorias->save($grupo)) {
            $this->Flash->success(__('It has been successfully modified.'));
        } else {
            $this->Flash->error(__('Error. Try again.'));
        }

        return $this->redirect(['action' => 'sub']);
    }


    public function eliminarsub($id = null)
    {
        $this->loadModel('Subcategorias');
        $n = $this->Subcategorias->find('all')->where(['id_grupos' => $id])->count();

        if($n == 0){
            $this->loadModel('Subcategorias');
            $this->request->allowMethod(['post', 'delete']);
            $Subcategorias = $this->Subcategorias->get($id);
            if ($this->Subcategorias->delete($Subcategorias)) {
                $this->Flash->success(__('It has been removed successfully.'));
            } else {
                $this->Flash->error(__('Could not be removed. Try again.'));
            }
        }else{
            $this->Flash->info(__('Error. Many products dependent on this group'));
        }
            return $this->redirect(['action' => 'sub']);
    }
}