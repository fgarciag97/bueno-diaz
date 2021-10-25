<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        /*******************************MENU DESPLEGABLE*****************************************/
        $this->loadModel('ViewGrupos');
        $grupos = $this->ViewGrupos->find('all')->order(['id' => 'ASC'])->limit(4)->toArray();
        $this->set('grupos', $grupos);
        /****************************************************************************************/

        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [
            'authError' => ' ',
            'authorize' => ['Controller'],
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Usuarios',                                        
                    'fields' => [
                        'username' => 'correo',
                        'password' => 'password'
                    ]                        
                ]
            ],
            'loginAction' => [
                'controller' => 'Principal',
                'action' => 'index'
            ],
            'loginRedirect' => [
                'controller' => 'Inicio', 
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Principal', 
                'action' => 'index'
            ],
            'storage' => 'Session'
        ]);

        /*
        $this->loadModel('Usuarios');
        $empresas = $this->Usuarios->find('all')->where(['privilegio' => 1])->order(['nombres' => 'ASC'])->toArray();
        $this->set('empresas', $empresas);

        $this->loadModel('ViewGrupos');
        $grupos = $this->ViewGrupos->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $this->set('grupos', $grupos);

        $this->loadModel('ViewProductos');
        $recientes = $this->ViewProductos->find('all')->order(['id' => 'DESC'])->limit(12)->toArray();
        $this->set('recientes', $recientes);

        $this->loadModel('ViewProductos');
        $productos = $this->ViewProductos->find('all')->order(['id' => 'DESC'])->toArray();
        $this->set('productos', $productos);

    */
        $this->loadModel('ViewCarritoProductos');
        $items = $this->ViewCarritoProductos->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id"), 'estatus' => 0])->toArray();
        $n = 0;
        foreach ($items as $key) 
        {
            $n += $key['cantidad'];
        }
        $this->set('items', $n);
        
    

        $this->loadModel('Municipios');
        $condicion = ['id' => 14];
        $municipios = $this->Municipios->find('all')->where($condicion)->order(['denominacion' => 'ASC'])->toArray();
        $options = [];
        foreach ($municipios as $key) 
        {
            $options[$key->id] = strtoupper($key->denominacion);
        }
        $this->set('municipios', $options);
    }

    public function isAuthorized($user){
        return true;
    }

    public function revertir_moneda($decimal){
        $decimal = str_replace(',', '.', str_replace('.', '', $decimal));
        return $decimal;
    }

    public function revertir_moneda_gringa($decimal){
        $decimal = str_replace(',', '', $decimal);
        return $decimal;
    }

    public function moneda($x){
        $x = number_format($x, 2, '.', '');
        return $x;
    }

    public function mayus($x){
        $x = strtoupper(utf8_decode($x));
        return $x;
    }


    public function generatePassword($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    } 

    public function cod_autenticado($length = 100) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


}
