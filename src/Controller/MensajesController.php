<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class MensajesController extends AppController
{
	

	public function index(){
		$this->loadModel('Contactos');
        $mensaje = $this->paginate($this->Contactos->find('all'));
        $this->set(compact('mensaje'));
	}

    public function delete($id = null){

        $this->request->allowMethod(['post', 'delete']);

                $this->loadModel('Contactos');
                $mensaje = $this->Contactos->get($id);

                if ($this->Contactos->delete($mensaje)) {
                    $this->Flash->success(__('The record has been deleted.'));

                } else {
                    
                    $this->Flash->error(__('The record could not be deleted. Please try again.'));
                }
        return $this->redirect(['action' => 'index']);
    }
}
