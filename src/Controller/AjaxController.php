<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class AjaxController extends AppController
{
    public function beforeFilter(Event $event){
        $this->Auth->allow(['parroquias', 'cuentas']);
    }

    public function parroquias($id = null){

        @$this->layout = 'ajax';

        $this->loadModel('Parroquias');
        $condicion = ['id_municipio' => $id];
        $query = $this->Parroquias->find('all', ['conditions' => $condicion])->order(['denominacion' => 'ASC'])->toArray();

        $query = json_encode([$query]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }

    public function cuentas($id = null){

        @$this->layout = 'ajax';

        $this->loadModel('ViewCuentas');
        $condicion = ['id' => $id];
        $query = $this->ViewCuentas->find('all', ['conditions' => $condicion])->last();

        $query = json_encode([$query]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }

    public function productos($id = null){

        @$this->layout = 'ajax';

        $this->loadModel('ViewCarritoProductos');
        $condicion = ['id_carrito' => $id];
        $query = $this->ViewCarritoProductos->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }

    public function motorizados(){

        @$this->layout = 'ajax';

        $this->loadModel('Usuarios');
        $query = $this->Usuarios->find('all')->where(['privilegio' => 3, 'fecha_disponible' => date('Y-m-d'), 'disponible' => true])->order(['fecha_registro' => 'ASC'])->toArray();

        $query = json_encode([$query]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }


    public function historial($id = null){

        @$this->layout = 'ajax';

        $this->loadModel('ViewClasificacion');
        $condicion = ['id_motorizado' => $id];
        $query = $this->ViewClasificacion->find('all', ['conditions' => $condicion])->toArray();

        $query = json_encode([$query]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }

    public function subcategorias($id = null){

        @$this->layout = 'ajax';

        $this->loadModel('Subcategorias');
        $condicion = ['id_grupos' => $id];
        $query = $this->Subcategorias->find('all', ['conditions' => $condicion])->order(['denominacion' => 'ASC'])->toArray();

        $query = json_encode([$query]);
        @$this->response->type('json');
        @$this->response->body($query);
        return $this->response;
    }
}