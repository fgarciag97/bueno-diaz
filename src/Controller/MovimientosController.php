<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
use Cake\Event\Event;

class MovimientosController extends AppController
{
   public function index(){

      	$this->loadModel('ViewMovimientos');
        $historial = $this->paginate($this->ViewMovimientos->find('all')->order(['id' => 'DESC']));
        $this->set(compact('historial'));


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


        if ($this->request->is('post')) {
            
        	if($this->request->data['id_grupo'] != null){
        		$this->loadModel('ViewMovimientos');
		        $historial = $this->paginate($this->ViewMovimientos->find('all')->where(['grupo' => $this->request->data['id_grupo']])->order(['id' => 'DESC']));
		        $this->set(compact('historial'));
        	}
            
        }
        
    }    
}