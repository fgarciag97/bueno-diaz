<?php
namespace App\Controller;

use App\Controller\AppController;

class TasaController extends AppController
{
	public function index(){
		$this->loadModel('Tasas');
        $tasa = $this->Tasas->find('all')->order(['id' => 'DESC'])->toArray();
        $this->set('tasa', $tasa);

        $this->loadModel('Tasas');
        $rubros = $this->paginate($this->Tasas->find('all'));
        $this->set(compact('rubros'));

        $this->loadModel('Tasas');
        $tasa_cambio = $this->Tasas->newEntity();
        if ($this->request->is('post')) {
            $tasa_cambio = $this->Tasas->patchEntity($tasa_cambio, $this->request->getData());
            $tasa_cambio->monto = @$this->revertir_moneda($this->request->data['monto']);
            $tasa_cambio->fecha = date('d/m/Y');

            if ($this->Tasas->save($tasa_cambio)) {

                $this->Flash->success(__('El registro se ha guardado'));

                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('El registro no se ha podido guardar. Vuelva a intentar.'));
            }
        }
	}

	public function edit()
    {
        $this->loadModel('Tasas');
        $this->request->allowMethod(['post', 'get', 'save']);
        $tasa = $this->Tasas->get(@$this->request->data['id']);
        $tasa->monto = @$this->revertir_moneda($this->request->data['monto']);

        if ($this->Tasas->save($tasa)) {
            $this->Flash->success(__('Modificado'));
        } else {
            $this->Flash->error(__('Error. Intente de nuevo'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
