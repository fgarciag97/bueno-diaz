<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
use Cake\Event\Event;

class PrincipalController extends AppController
{
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'login', 'menu', 'registro', 'contacto', 'informacion', 'carrito', 'agregarCarrito', 'tramites', 'detalle', 'search', 'recuperar', 'buscador']);
        $this->viewBuilder()->setLayout('principal');
    }

    public function index(){

        //=================================   Productos  ========================================
        $this->loadModel('ViewProductos');
        $productos = $this->ViewProductos->find('all')->where(['status' => true])->order(['id' => 'DESC'])->limit(20)->toArray();
        $this->set('productos', $productos);
        //==================================================================================
        
        //=================================   Grupos  ========================================
        $this->loadModel('Grupos');
        $grupos = $this->Grupos->find('all')->order(['denominacion' => 'ASC'])->toArray();
        $this->set('grupos', $grupos);
        //==================================================================================

        //=================================   Mas vendidas  ========================================
        $this->loadModel('ViewProductos');
        $mas_vendido = $this->ViewProductos->find('all')->where(['status' => true])->where(['promocion' => 1])->order(['id' => 'DESC'])->toArray();
        $this->set('mas_vendido', $mas_vendido);
        //==================================================================================
    }

    public function menu($id_grupo = null, $id_sub_cat = null){

        if($this->request->is('post')){
            if(@$this->request->data['texto'] != null){
                $id_grupo = @$this->request->data['id_grupo'];
                $id_sub_cat = @$this->request->data['id_sub_cat'];
                $texto = @$this->request->data['texto'];
            }
        }
         //=================================   Productos  ========================================
        $this->loadModel('ViewProductos');
        $productos = $this->ViewProductos->find('all')->where(['status' => true])->order(['id' => 'DESC']);
        
        if ($id_grupo == null && ($id_sub_cat == null or $id_sub_cat == 0)) {
            $this->set('no', $no = false);
        }else{
            $this->set('no', $no = true);
            $this->set('id_grupo', $id_grupo);
            $this->set('id_sub_cat', $id_sub_cat);
        }

        //===========================================================================================
        if($texto != null){

            $search = strtoupper($texto);
            $search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
            $terms = explode(' ', trim($search));
            $terms = array_diff($terms, array(''));
            
            foreach($terms as $term)
            {
                $terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
                $conditions[] = ['OR' => [['denominacion LIKE' => '%' . strtolower($term) . '%'], ['denominacion LIKE' => '%' . strtoupper($term) . '%'], ['denominacion LIKE' => '%' . ucwords(strtolower($term)) . '%']]];
            }
            
            $this->loadModel('ViewProductos');
            $productos = $this->ViewProductos->find('all', array('recursive' => -1, 'conditions' => $conditions,'limit' => 200 ))->where(['status' => true]);
           
        }else{
            if($id_grupo != null and ($id_sub_cat != null or $id_sub_cat != 0)){
                $productos->where(['id_grupo' => $id_grupo, 'id_subcategoria' => $id_sub_cat]);
            }else if($id_grupo != null){
                $productos->where(['id_grupo' => $id_grupo]);
            }
        }
        //===========================================================================================

        
        
        if($this->request->is('post')){
            if(@$this->request->data['grupo'] != null and @$this->request->data['grupo'] != 0){
                $productos->where(['id_grupo' => @$this->request->data['grupo']]);
            }
        }
        

        $this->paginate = array(
            'limit' => 12
        );
        
        $productos = $this->paginate($productos);
        $this->set(compact('productos'));
        $this->set(compact('conditions'));
        //==================================================================================
        
        //=================================   Grupos  ========================================
        
        $this->loadModel('ViewGrupos');
        $grupos = $this->ViewGrupos->find('all')->order(['id' => 'ASC'])->limit(4)->toArray();
        $this->set('grupos', $grupos);

        $this->loadModel('Subcategorias');
        $subcat = $this->Subcategorias->find('all')->order(['id' => 'ASC'])->toArray();
        $this->set('subcat', $subcat);

        $this->loadModel('Grupos');
        $categoria = $this->Grupos->find('all')->where(['id' => $id_grupo])->order(['id' => 'ASC'])->last();
        $this->set('categoria', $categoria);

        $this->loadModel('Subcategorias');
        $subcataa = $this->Subcategorias->find('all')->where(['id' => $id_sub_cat])->order(['id' => 'ASC'])->last();
        $this->set('subcataa', $subcataa);

        $this->loadModel('Subcategorias');
        $categoria_sub = $this->Subcategorias->find('all')->order(['id' => 'ASC'])->toArray();
        $this->set('categoria_sub', $categoria_sub);
        //==================================================================================

        //=================================   Mas vendidas  ========================================
        $this->loadModel('ViewProductos');
        $mas_vendido = $this->ViewProductos->find('all')->where(['status' => true])->where(['promocion' => 1])->order(['id' => 'DESC'])->toArray();
        $this->set('mas_vendido', $mas_vendido);
        //==================================================================================
        
    }

    public function tramites() {

        $this->loadModel('ViewCarrito');
        $registros = $this->paginate($this->ViewCarrito->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id"), 'estatus <>' => 0])->order(['id' => 'DESC']));
        $this->set(compact('registros'));

    }

    public function perfil(){

        $this->loadModel('Usuarios');
        @$usuario = $this->Usuarios->get(@$this->request->session()->read("Auth.User.id"), [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());

            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The profile has been updated'));

                return $this->redirect(['controller' => 'home', 'action' => 'profile']);
            }
            $this->Flash->error(__('Error. Try later'));
        }
        $this->set(compact('usuario'));

    }


    public function password(){
        $this->loadModel('Usuarios');
        $contraseña = $this->Usuarios->find('all')->where(['correo' => @strtoupper($this->request->session()->read("Auth.User.correo"))])->last();
        $actual1 = $contraseña['password'];
        $actual2 = @strtoupper($this->request->data['actual']);
        $nueva1 = @strtoupper($this->request->data['nueva1']);
        $nueva2 = @strtoupper($this->request->data['nueva2']);
 
        if (password_verify($actual2, $actual1)) {
            if($nueva1 == $nueva2){
                
                $this->loadModel('Usuarios');
                $usuario = $this->Usuarios->get(@$this->request->session()->read("Auth.User.id"));

                $usuario->password = strtoupper($nueva1);

                if ($this->Usuarios->save($usuario)) {
                    $this->Flash->success(__('Passwords have been updated'));
                }else{
                    $this->Flash->error(__('Error. Try again'));
                }
            }else{
                $this->Flash->error(__('Passwords do not match'));
            }
            
        } else {
            $this->Flash->error(__('Passwords do not match'));
        }
            return $this->redirect(['controller' => 'home', 'action' => 'profile']);
    }



    public function carrito(){

        if(@$this->request->session()->read("Auth.User.id") == null and @$this->request->session()->read("Auth.User.nombres") == null and @$this->request->session()->read("Auth.User.cedula") == null){
                $this->Flash->info(__('Please, Log in'));
                return $this->redirect(['action' => 'index']);
        }

        $this->loadModel('ViewCarritoProductos');
        $productos = $this->ViewCarritoProductos->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id")])->order(['id' => 'DESC'])->toArray();
        $this->set('productos', $productos);

        $this->loadModel('ViewCarrito');
        $carrito = $this->ViewCarrito->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id"), 'estatus' => 0])->order(['id' => 'DESC'])->toArray();
        $this->set('carrito', $carrito);

        $this->loadModel('ViewCuentas');
        $cuentas = $this->ViewCuentas->find('all')->order(['banco' => 'ASC'])->toArray();
        $this->set('cuentas', $cuentas);

    }

    public function sacarCarrito($id = null, $id_carrito = null, $id_empresa = null)
    {
        $this->loadModel('CarritoProductos');
        $this->request->allowMethod(['post', 'delete']);
        $carrito = $this->CarritoProductos->get($id);
        if ($this->CarritoProductos->delete($carrito)) {
            $this->Flash->success(__('It has been removed successfully.'));

            $this->loadModel('CarritoProductos');
            @$n_productos = @$this->CarritoProductos->find('all')->where(['id_carrito' => $id_carrito])->count();

            if($n_productos == null) $n_productos = 0;

            if($n_productos == 0){
                $this->loadModel('Carrito');
                $query = $this->Carrito->deleteAll(['id IN' => $id_carrito]);
            }

        }else{
            $this->Flash->error(__('It has not been removed. Try again.'));
        }

        return $this->redirect(['action' => 'carrito']);
    }

    public function agregarCarrito($id_producto = null, $url = null){

        $this->loadModel('ViewProductos');
        $producto = $this->ViewProductos->find('all')->where(['id' => $id_producto])->last();

        $this->loadModel('Carrito');
        $n_carrito = $this->Carrito->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id"), 'estatus' => 0])->count();

        if($n_carrito == 0){
            $this->loadModel('Carrito');
            $carrito = $this->Carrito->newEntity();
            $carrito->id_usuario = @$this->request->session()->read("Auth.User.id");
            $carrito->hora = date("H:m:i");
            $carrito->fecha = date("d/m/Y");
            $carrito->estatus = 0;
            $this->Carrito->save($carrito);
        }

        $id_carrito = $this->Carrito->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id"), 'estatus' => 0])->last();


        $this->loadModel('ViewCarritoProductos');
        $n_productos = $this->ViewCarritoProductos->find('all')->where(['id_carrito' => $id_carrito['id'], 'id_producto' => $id_producto, 'estatus' => 0])->count();

        if($n_productos == 0){
            $this->loadModel('CarritoProductos');
            $carrito = $this->CarritoProductos->newEntity();
            $carrito->id_carrito = $id_carrito['id'];
            $carrito->id_producto = $id_producto;
            $carrito->cantidad = 1;
            $carrito->precio = $producto['precio'];

            $this->CarritoProductos->save($carrito);
        }

        $this->Flash->success(__('Product added to cart'));
        if($url == 1){
            return $this->redirect(['controller' => 'principal', 'action' => 'index']);
        }else{
            return $this->redirect(['controller' => 'principal', 'action' => 'menu']);
        }
    }

     public function detalle($id = null)
    {
        $this->loadModel('ViewProductos');
        $ver = $this->ViewProductos->find('all')->where(['id' => $id])->last();
        $this->set('ver', $ver);
        $this->set('id', $id);


        if ($this->request->is('post')) {
            $this->loadModel('ViewProductos');
            $producto = $this->ViewProductos->find('all')->where(['id' => @$this->request->data['id']])->last();

            $this->loadModel('Carrito');
            $n_carrito = $this->Carrito->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id"), 'estatus' => 0])->count();

            if($n_carrito == 0){
                $this->loadModel('Carrito');
                $carrito = $this->Carrito->newEntity();
                $carrito->id_usuario = @$this->request->session()->read("Auth.User.id");
                $carrito->hora = date("H:m:i");
                $carrito->fecha = date("d/m/Y");
                $carrito->estatus = 0;
                $this->Carrito->save($carrito);
            }

            $id_carrito = $this->Carrito->find('all')->where(['id_usuario' => @$this->request->session()->read("Auth.User.id"), 'estatus' => 0])->last();


            $this->loadModel('ViewCarritoProductos');
            $n_productos = $this->ViewCarritoProductos->find('all')->where(['id_carrito' => $id_carrito['id'], 'id_producto' => @$this->request->data['id'], 'estatus' => 0])->count();

            if($n_productos == 0){
                $this->loadModel('CarritoProductos');
                $carrito = $this->CarritoProductos->newEntity();
                $carrito->id_carrito = $id_carrito['id'];
                $carrito->id_producto = @$this->request->data['id'];
                $carrito->cantidad = @$this->request->data['cantidad'];
                $carrito->precio = $producto['precio'];

                $this->CarritoProductos->save($carrito);
                $this->Flash->success(__('Product added to cart'));
            }else{
                $this->loadModel('ViewCarritoProductos');
                $n_productos = $this->ViewCarritoProductos->find('all')->where(['id_carrito' => $id_carrito['id'], 'id_producto' => @$this->request->data['id'], 'estatus' => 0])->last();

                $this->loadModel('CarritoProductos');
                $query = $this->CarritoProductos->query();
                $query->update()
                    ->set(['cantidad' => $n_productos['cantidad'] + @$this->request->data['cantidad']])
                    ->where(['id_carrito' => $id_carrito['id'], 'id_producto' => @$this->request->data['id']])
                    ->execute(); 
                $this->Flash->info(__('A new unit has been added to the cart'));
                $this->set("n", $n_productos['cantidad']);
            }
        }
    }
     
      public function editarcarrito()
    {
        $this->loadModel('CarritoProductos');

        if(@$this->request->data['cantidad'] != 0){
            $query = $this->CarritoProductos->query();
            $query->update()
                ->set(['cantidad' => @$this->request->data['cantidad']])
                ->where(['id' => @$this->request->data['id']])
                ->execute(); 
        }else{
            $query = $this->CarritoProductos->deleteAll(['id' => @$this->request->data['id']]);

            $this->loadModel('ViewCarrito');
            $n = $this->ViewCarrito->query()->where(['id' => @$this->request->data['id_carrito']])->last();

            if($n['n_c'] == 0){
                $this->loadModel('Carrito');
                $query = $this->Carrito->deleteAll(['id IN' => @$this->request->data['id_carrito']]);//nuevo
            }
        }

        if ($query) {
            $this->Flash->success(__('Amount Updated'));
        } else {
            $this->Flash->error(__('Error. Try again.'));
        }

        return $this->redirect(['action' => 'carrito']);
    }





    public function enviarcarrito() {



    	 $this->loadModel('Carrito');
        $query = $this->Carrito->query();
        $query->update()
            ->set([
                'estatus' => 1,
                'fecha_pago' =>  date('d/m/Y'), 
                'monto' =>  @$this->request->data['monto'],
                'monto_bs' =>  @$this->request->data['monto_bs'],
                'direccion_envio' =>  @$this->request->data['direccion_envio'],
                'descripcion_billete' =>0,
                'tipo_pago' =>  'EFECTIVO'
            ])
            ->where(['id' => @$this->request->data['id']])
            ->execute();  

        if($query){
            $this->Flash->success(__('Your order has been received. You will be notified as soon as it is reviewed'));
        }else{
            $this->Flash->error(__('Error registering payment. Try again'));;
        }
        
        return $this->redirect(['action' => 'carrito']);






    }








    public function pagoCarrito() {

        $this->loadModel('Carrito');
        $query = $this->Carrito->query();
        $query->update()
            ->set([
                'estatus' => 1, 
                'id_cuenta' =>  @$this->request->data['id_cuenta'], 
                'referencia' =>  @$this->request->data['referencia'], 
                'fecha_pago' =>  @$this->request->data['fecha_pago'], 
                'concepto' =>  @$this->request->data['concepto'], 
                'direccion_envio' =>  @$this->request->data['direccion_envio'],
                'monto' =>  @$this->request->data['monto'],
                'monto_bs' =>  @$this->request->data['monto_bs'],
                'tipo_pago' =>  'TRANSFERENCIA'
            ])
            ->where(['id' => @$this->request->data['id']])
            ->execute();  

            /*$this->loadModel('ViewCarrito');
            $usuario = $this->ViewCarrito->find('all')->where(['id' => @$this->request->data['id']])->last();

            if($usuario['usuario_correo'] != null){ 

                 $n = 6 - strlen(@$this->request->data['id']);
                  $codigo = '';
                  for($i=0; $i < $n; $i++){
                      $codigo .= "0";
                  }
                  $codigo .= @$this->request->data['id'];
                
                $correo = new Email();
                @$correo
                  ->setTransport('default')
                  ->setEmailFormat('html') //formato de correo
                  ->setTo($usuario['usuario_correo']) //correo para
                  ->setSubject('Notification system - Bueno&Diaz') //asunto
                  ->setFrom(['correo@gmail.com'  => 'Bueno&Diaz']) //correo de
                  ->ViewVars([ 
                    'codigo' => @$codigo
                  ]);

                $correo->viewBuilder()->setTemplate('pagado');
                
                if(!$correo->send()){
                  $this->Flash->info(__('Correo de Alerta no se ha enviado. Ha colapsado el envio de Correos por HOY'));
                }else{
                    $this->Flash->success('Contraseña enviada a su correo electrónico');
                }
                
            }*/

            $this->loadModel('Usuarios');
	        $usuario = $this->Usuarios->find('all')->where(['id' => @$this->request->session()->read("Auth.User.id")])->last();

	        if($usuario['correo'] != null){
	                
	                $correo = new Email();
	                @$correo
	                  ->setTransport('comprar')
	                  ->setEmailFormat('html') //formato de correo
	                  ->setTo($usuario['correo']) //correo para
	                  ->setSubject('Notification about your order - Bueno&Diaz') //asunto
	                  ->setFrom(['sales@buenodiaz.com'  => 'Bueno&Diaz'])
	                  ->ViewVars(['consulta' => 'epale']);

	                $correo->viewBuilder()->setTemplate('comprar');
	                
	                $correo2 = new Email();
	                @$correo2
	                  ->setTransport('correoadmin')
	                  ->setEmailFormat('html') //formato de correo
	                  ->setTo('buenodiazcorp@gmail.com') //correo para
	                  ->setSubject('Notification about your order - Bueno&Diaz') //asunto
	                  ->setFrom(['sales@buenodiaz.com'  => 'Bueno&Diaz'])
	                  ->ViewVars(['consulta' => 'epale']);

	                $correo2->viewBuilder()->setTemplate('correoadmin');
	          } 

        if($query && $correo->send() && $correo2->send()){
            $this->Flash->success(__('Your order has been received. You will be notified as soon as it is reviewed'));
        }else{
            $this->Flash->error(__('Error registering payment. Try again'));;
        }
        
        return $this->redirect(['action' => 'carrito']);

    }


    public function pagoCarritoD() {

        $this->loadModel('Carrito');
        $query = $this->Carrito->query();
        $query->update()
            ->set([
                'estatus' => 1,
                'fecha_pago' =>  date('d/m/Y'), 
                'monto' =>  @$this->request->data['monto'],
                'monto_bs' =>  @$this->request->data['monto_bs'],
                'direccion_envio' =>  @$this->request->data['direccion_envio'],
                'descripcion_billete' =>  @$this->request->data['descripcion_billete'],
                'tipo_pago' =>  'EFECTIVO'
            ])
            ->where(['id' => @$this->request->data['id']])
            ->execute();  

        if($query){
            $this->Flash->success(__('Your payment has been recorded. You will be notified as soon as it is reviewed'));
        }else{
            $this->Flash->error(__('Error registering payment. Try again'));;
        }
        
        return $this->redirect(['action' => 'carrito']);

    }
        
        
    public function contacto(){

        $this->loadModel('Contactos');
        $agregar = $this->Contactos->newEntity();

        if ($this->request->is('post')) {
            $agregar = $this->Contactos->patchEntity($agregar, $this->request->getData());

            if ($this->Contactos->save($agregar)) {

                $this->Flash->success(__('Your message has been sent. You will be answered by the indicated email.'));

                return $this->redirect(['action' => 'contacto']);
            }
        }

    }

    public function informacion(){

    }

    public function login(){
        if($this->request->is('post')){

            @$this->request->data['correo'] = @strtoupper($this->request->data['correo']);

            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                $this->Flash->success('Log in Successful');
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->error('Incorrect data. Try again');
                return $this->redirect(['action' => 'index']);
            }
        }
    }

    public function logout(){
        $this->Auth->logout();
        return $this->redirect($this->Auth->logout());
    }

    public function registro(){

        $this->loadModel('Usuarios');
        $registro = $this->Usuarios->newEntity();
        $registro = $this->Usuarios->patchEntity($registro, $this->request->getData());
            
        $registro->fecha_registro = date('d-m-Y');
        $registro->privilegio = 2;
        $registro->cedula = @$this->request->data['id'];
        $registro->letra = 'V';
        $registro->correo = strtoupper($registro->correo);

        if(@$this->request->data['password'] != @$this->request->data['password2']){
            $this->Flash->error(__('Passwords do not match'));
            return $this->redirect(['action' => 'index']);
        }else{
            $n = $this->Usuarios->find('all')->where(['correo' => $registro->correo])->count();
            $n2 = $this->Usuarios->find('all')->where(['company' => $registro->company])->count();
            /*var_dump($n2); exit();*/

            if($n == 0){
                if ($n2 == 0) {
                    if ($this->Usuarios->save($registro)) {
                        $this->Flash->success(__('Registered user successfully.'));
                        return $this->redirect(['action' => 'index']);
                    }else{
                        $this->Flash->error(__('Registration failed.'));
                        return $this->redirect(['action' => 'index']);
                    }
                }else{
                   $this->Flash->error(__('Company already registered.'));
                    return $this->redirect(['action' => 'index']); 
                }
            }else{
                $this->Flash->error(__('Email already used.'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }



      public function editc()
    {
       
        
    }




    public function reporte($id_carrito = null){

        $pdf = new \FPDF('P','mm',array(216,279)); //Tamaño Carta

        $pdf->AddPage();
        $pdf->ln(4);
        $pdf->SetFillColor(0,0,0);

        $pdf->SetY(250);

        $pdf->SetY(30);
        $pdf->SetFont('Arial','I',11);
        $pdf->Cell(120,4,'4768 Nw 114th Ave Unit 102', 0, 1, 'R');
        $pdf->Cell(110,4,'Doral Fl 33178', 0, 1, 'R');
        $pdf->Cell(120,4,'buenodiazcorp@gmail.com', 0, 1, 'R');
        $pdf->Cell(110,4,'786.340.6298.', 0, 1, 'R');
        $fecha = date("m/d/Y");
      
       
        $this->loadModel('ViewCarrito');
        $recibo = $this->ViewCarrito->find('all')->where(['id' => $id_carrito])->last();
        
        $n = 6 - strlen($recibo->id);
          $codigo = '';
          for($i=0; $i < $n; $i++){
              $codigo .= "0";
          }
          $codigo .= $recibo->id;

        $pdf->SetY(25);
        $pdf->SetFont('Arial','B',20);
        $pdf->Image(WWW_ROOT.'img/logo-white2.png',10,22,55,35,"PNG","");
        $pdf->Cell(180,10,'ORDER', 0, 1, 'R');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(150,10,'Order #', 0, 0, 'R');   
        $pdf->SetFont('Arial','I',12);       
        $pdf->Cell(30,10,$codigo, 'B', 1, 'L');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(150,10,'Date', 0, 0, 'R');
        $pdf->Cell(30,10,date_format($recibo['fecha'],'m/d/Y'), 'B', 1, 'L');          

        $pdf->ln(10);


        $pdf->SetFont('Arial','BI',12);
        $pdf->Cell(50,5,'Customer Name:', 0,0,'L');

        $pdf->SetFont('Arial','I',12);
        $pdf->Cell(130,5,utf8_decode($recibo['compania']), 'B',1,'L');
        $pdf->ln(3);

        $pdf->SetFont('Arial','BI',12);
        $pdf->Cell(50,5,'Adress:', 0,0,'L');
        $pdf->SetFont('Arial','I',12);
        $pdf->MultiCell(130,4 ,$recibo['direccion'].', '.$recibo['city'].', '.$recibo['state'].', '.$recibo['code'], 'B' , j , false );
        $pdf->ln(3);



        $pdf->SetFont('Arial','BI',12);
        $pdf->Cell(50,5,'Shipping Address:', 0,0,'L');
        $pdf->SetFont('Arial','I',12);
        $pdf->Cell(130,5,$recibo['direccion_envio'], 'B',1,'L');
        $pdf->ln(3);

       

        $pdf->SetFont('Arial','BI',12);
        $pdf->Cell(50,5,'Phone:', 0,0,'L');

        $pdf->SetFont('Arial','I',12);
        $pdf->Cell(50,5,$recibo['usuario_movil'], 'B',0,'L');

        $pdf->SetFont('Arial','BI',12);
        $pdf->Cell(15,5,'E-mail:', 0,0,'L');

        $pdf->SetFont('Arial','I',12);
        $pdf->Cell(65,5,utf8_decode($recibo['usuario_correo']), 'B',1,'L');



        $pdf->ln(8);

        $pdf->SetFillColor(198,204,17);
        $pdf->Cell(190,0.5,'', 0,1,'L', TRUE);

        $pdf->ln(2);

        $this->loadModel('ViewCarritoProductos');
        $recibo = $this->ViewCarritoProductos->find('all')->where(['id_carrito' => $id_carrito])->toArray();

        $pdf->SetFont('Arial','BI',25);
        $pdf->Cell(150,15,'Total to pay', 0, 0, 'L');

        $total = 0;

        foreach ($recibo as $key) {
            $total += $key['cantidad'] * $key['precio'];
        }




        $pdf->Cell(40,15,'$' . number_format($total, 2, '.', ',' ), 0, 1, 'R');

        $pdf->ln(2);

        $pdf->Cell(190,0.5,'', 0,1,'L', TRUE);

        $pdf->ln(4);
        
        $pdf->SetFont('Arial','I',13);

        $pdf->Cell(10,6,'Iten', 0,0,'L');
        $pdf->Cell(22,6,'Total', 0,0,'L');
        $pdf->Cell(114,6,'Description', 0,0,'L');
        $pdf->Cell(30,6,'Unit Price', 0,0,'C');
        $pdf->Cell(15,6,'Amount', 0,1,'R');

        $pdf->ln(3);

        $iten = 1;

        foreach ($recibo as $key) {
            $pdf->Cell(10,7,$iten++,0,0,'C');
            $pdf->Cell(22,7,$key['cantidad'],0,0,'C');
            $pdf->Cell(114,7,utf8_decode($key['denominacion']),0,0,'L');
            $pdf->Cell(30,7,'$' . number_format($key['precio'], 2, '.', ',' ),0,0,'C');
            $pdf->Cell(15,7,'$' . number_format($key['precio'] * $key['cantidad'], 2, '.', ',' ),0,1,'R');
        }

        $pdf->ln(16);
         $pdf->SetFont('Arial','BI',13);
        $pdf->Cell(190,6,'Thanks for your purchase',0,1,'C');


        

        $pdf -> Output('Receipt.pdf', 'D');
        exit();

     }


     #######################################################################

     public function recuperar(){
        $this->autoRender = false;

        @$this->request->data['correo'] = @strtoupper($this->request->data['correo']);

        $this->loadModel('Usuarios');
        $usuario = $this->Usuarios->find('all')->where(['correo' => @$this->request->data['correo']])->last();

        if($usuario['correo'] != null){ 

            $nueva = $this->generatePassword();

            $this->loadModel('Usuarios');
            $data = $this->Usuarios->find('all')->where(['correo' => @$this->request->data['correo']])->last();

            $this->loadModel('Usuarios');
            $usuario = $this->Usuarios->get($data['id']);
            $usuario->password = $nueva;
            $this->Usuarios->save($usuario);
            
            $correo = new Email();
            @$correo
              ->setTransport('password')
              ->setEmailFormat('html') //formato de correo
              ->setTo($usuario['correo']) //correo para
              ->setSubject('Notification system - Bueno&Diaz') //asunto
              ->setFrom(['correo@gmail.com'  => 'Bueno&Diaz']) //correo de
              ->ViewVars([ 
                'password' => @$nueva
              ]);

            $correo->viewBuilder()->setTemplate('recuperar');
            
            if(!$correo->send()){
              $this->Flash->info(__('Correo de Alerta no se ha enviado. Ha colapsado el envio de Correos por HOY'));
            }else{
                $this->Flash->success('Contraseña enviada a su correo electrónico');
            }
            
        }
        
        return $this->redirect(['action' => 'index']);
    }




    public function searchjson() {

        $term = null;

        if (!empty($this->request->query['term'])) 
        {
           $term = $this->request->query['term'];
            $terms = explode('',trim($term));
            $terms = array_diff($terms, array(''));
            foreach ($terms as  $term) {
               $conditions[] = array('Productos.denominacion LIKE' => '%' . $term . '%' );

            }


            $productos = $this->find('all' , array('recursive'=> -1, 'fields' => array('Productos.id', 'Productos.denominacion', 'Productos.photo', 'Productos.photo_dir'), 'conditions' => $conditions, 'limit' => 20 ));

        }

        echo json_encode($productos);
        $this->autoRender = false ;

    }

     public function search()
    {
        $search = null;
        if(!empty(@$this->request->query['search']))
        {
            $search = @$this->request->query['search'];
            $search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
            $terms = explode(' ', trim($search));
            $terms = array_diff($terms, array(''));
            
            foreach($terms as $term)
            {
                $terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
                $conditions[] = array('ViewProductos.denominacion LIKE' => '%' . $term . '%');
            }
            $this->loadModel('ViewProductos');
            $productos = $this->ViewProductos->find('all', array('recursive' => -1, 'conditions' => $conditions,'limit' => 200 ))->toArray();
            /*if(count($productos) == 1)
            {
               // return $this->redirect(array('controller' => 'principal', 'action' => 'search', $productos[0]['Productos']['id']));
            }*/
            $terms1 = array_diff($terms1, array(''));
            $this->set(compact('productos', 'terms1'));
        }
        $this->set(compact('search'));
        
        if($this->request->is('ajax'))
        {
            $this->layout = false;
            $this->set('ajax', 1);
        }
        else
        {
            $this->set('ajax', 0);
        }
    }

    
    
}