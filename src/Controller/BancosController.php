<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
use Cake\Event\Event;

class BancosController extends AppController
{
   public function index(){

        $this->loadModel('Bancos');
        $grupos = $this->paginate($this->Bancos->find('all')->order(['id' => 'ASC']));
        $this->set(compact('grupos'));

        $agregar = $this->Bancos->newEntity();
        if ($this->request->is('post')) {
            $agregar = $this->Bancos->patchEntity($agregar, $this->request->getData());

            if ($this->Bancos->save($agregar)) {
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
        $this->loadModel('Bancos');
        $this->request->allowMethod(['post', 'get', 'save']);
        $grupo = @$this->Bancos->get($this->request->data['id']);
        $grupo->denominacion = @$this->request->data['denominacion'];
         $grupo->url = @$this->request->data['url'];

        if ($this->Bancos->save($grupo)) {
            $this->Flash->success(__('It has been successfully modified.'));
        } else {
            $this->Flash->error(__('Error. Try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function delete($id = null)
    {
        $this->loadModel('Bancos');
        $this->request->allowMethod(['post', 'delete']);
        $Bancos = $this->Bancos->get($id);
        if ($this->Bancos->delete($Bancos)) {
            $this->Flash->success(__('It has been removed successfully.'));
        } else {
            $this->Flash->error(__('Could not be removed. Try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}