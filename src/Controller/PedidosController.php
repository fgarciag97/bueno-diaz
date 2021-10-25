<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email; //correo

/**
 * Pedidos Controller
 *
 */
class PedidosController extends AppController
{
	public function index(){
		
		$this->loadModel('ViewCarrito');
        $registros = $this->paginate($this->ViewCarrito->find('all')->where(['estatus <>' => 0])->order(['id' => 'DESC']));
        $this->set(compact('registros'));

	}
	
public function declinar(){
        $this->request->allowMethod(['post', 'get', 'save']);
        $this->loadModel('Carrito');
        $query = $this->Carrito->query();
        $parametros = ['motivo' => @$this->request->data['nota'], 'estatus' => 2];
        $condicion = ['id' => @$this->request->data['id']];
        $query->update()
                ->set($parametros)
                ->where($condicion)
                ->execute();
            
        if($query){
            $this->loadModel('ViewCarrito');
            $usuario = $this->ViewCarrito->find('all')->where(['id' => @$this->request->data['id']])->last();

            /*if($usuario['usuario_correo'] != null){
                
                $correo = new Email();
                @$correo
                  ->setTransport('default')
                  ->setEmailFormat('html') //formato de correo
                  ->setTo($usuario['usuario_correo']) //correo para
                  ->setSubject('Notification system - Bueno&Diaz') //asunto
                  ->setFrom(['correo@gmail.com'  => 'Bueno&Diaz']) //correo de
                  ->ViewVars([ 
                    'nota' => @$this->request->data['nota']
                  ]);

                $correo->viewBuilder()->setTemplate('rechazada');
                
                if(!$correo->send()){
                  $this->Flash->info(__('Correo de Alerta no se ha enviado. Ha colapsado el envio de Correos por HOY'));
                }else{
                    $this->Flash->success('Contraseña enviada a su correo electrónico');
                }
                
            } */
        }
        
        return $this->redirect(['action' => 'index']);
    }

    public function revision($id = null, $status = null){

        $this->loadModel('Carrito');
        $query = $this->Carrito->query();
        $query->update()
            ->set(['estatus' => $status, 'fecha_entrega' => date('d-m-Y'), 'hora_entrega' => date('H:m')])
            ->where(['id' => $id])
            ->execute();

        if($query){
            $this->loadModel('ViewCarritoProductos');
            $registros = $this->ViewCarritoProductos->find('all')->where(['id_carrito' => $id])->toArray();
            
            $this->loadModel('Movimientos');

            foreach ($registros as $key) {
                $mov = $this->Movimientos->newEntity();
                $mov->id_producto = $key['id_producto'];
                $mov->cantidad = $key['cantidad'];
                $mov->precio = $key['precio'];
                $mov->fecha = date('d-m-Y');
                $mov->tipo_movimiento = 2;
                $mov->id_carrito = $key['id_carrito'];
                $this->Movimientos->save($mov);
            }

            /*if($registros[0]['correo'] != null){
                
                $correo = new Email();
                @$correo
                  ->setTransport('default')
                  ->setEmailFormat('html') //formato de correo
                  ->setTo($registros[0]['correo']) //correo para
                  ->setSubject('Notification system - Bueno&Diaz') //asunto
                  ->setFrom(['correo@gmail.com'  => 'Bueno&Diaz']);;

                $correo->viewBuilder()->setTemplate('aprobada');
                
                if(!$correo->send()){
                  $this->Flash->info(__('Collapsed mail'));
                }
                
            } */

        }

        if($status == 1){
            $this->Flash->success(__('Registration has been reversed.'));
        }else if($status == 2){
            $this->Flash->success(__('The registration has been rejected. The user will be notified by email.'));
        }else if($status == 3){
            $this->Flash->success(__('Registration has been approved.'));
        }
        
        return $this->redirect(['action' => 'index']);
    }


    public function eliminarproducto($carrito = null, $producto = null){

        $this->autoRender = false;

        $this->loadModel('CarritoProductos');
        $query = $this->CarritoProductos->deleteAll(['id_carrito IN' => $carrito, 'id_producto IN' => $producto]);

        $this->Flash->success(__('Product removed from cart'));
        return $this->redirect(['controller' => 'Pedidos', 'action' => 'index']);
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
        $pdf->Cell(50,5,'Address:', 0,0,'L');
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

}









