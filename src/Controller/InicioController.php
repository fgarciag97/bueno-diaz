<?php
namespace App\Controller;

use App\Controller\AppController;

class InicioController extends AppController
{
	public function index(){
		if(@$this->request->session()->read("Auth.User.privilegio") == 2){
                return $this->redirect(['controller' => 'Principal', 'action' => 'index']);
        }
	}
}
