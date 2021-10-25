<?php
namespace App\Controller;

use App\Controller\AppController;

class CatalogosController extends AppController
{
	public function index(){

        $this->loadModel('Productos');
    
        $nuevo_producto = $this->Productos->newEntity();
        if ($this->request->is('post')) {
            $nuevo_producto = $this->Productos->patchEntity($nuevo_producto, $this->request->getData());
            $nuevo_producto->precio = $this->revertir_moneda_gringa(@$this->request->data['precio']);
            $nuevo_producto->codigo = @$this->request->data['codigo'];
            $nuevo_producto->id_subcategoria = $this->request->data['id_subcategoria'];

            if ($this->Productos->save($nuevo_producto)) {
                $this->Flash->success(__('The product has been saved'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('The product could not be saved. Try again.'));
            
        }
        $this->set(compact('nuevo_producto'));

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
         
        $this->loadModel('ViewProductos');
        $catalogos = $this->paginate($this->ViewProductos->find('all')->order(['id' => 'DESC']));
        $this->set(compact('catalogos'));
    }

    public function editarproductos()
    {
        $this->loadModel('Productos');
        $this->request->allowMethod(['post', 'get', 'save']);
        $producto = @$this->Productos->get($this->request->data['id']);
        $producto->id_grupo = @$this->request->data['id_grupo'];
        $producto->denominacion = @$this->request->data['denominacion'];
        $producto->descripcion = @$this->request->data['descripcion'];
        $producto->codigo = @$this->request->data['codigo'];
        $producto->precio = @$this->revertir_moneda_gringa($this->request->data['precio']);

        if ($this->Productos->save($producto)) {
            $this->Flash->success(__('It has been successfully modified'));
        } else {
            $this->Flash->error(__('Error. Try again'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function editarfoto()
    {
        $this->loadModel('Productos');
        $this->request->allowMethod(['post', 'get', 'save']);
        $producto = @$this->Productos->get($this->request->data['id']);
        $producto->photo = @$this->request->data['photo'];

        if ($this->Productos->save($producto)) {
            $this->Flash->success(__('It has been successfully modified'));
        } else {
            $this->Flash->error(__('Error. Try again'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function deleteproducto($id = null)
    { 
        $this->loadModel('CarritoProductos');
        $n = $this->CarritoProductos->find('all')->where(['id_producto' => $id])->count();

        if($n == 0){
            $this->loadModel('Productos');
            $this->request->allowMethod(['post', 'delete']);
            $productos = $this->Productos->get($id);
            if ($this->Productos->delete($productos)) {
                $this->Flash->success(__('It has been removed successfully.'));
            } else {
                $this->Flash->error(__('Could not be removed. Try again.'));
            }
        }else{
            $this->Flash->info(__('Impossible to remove. This product is in history'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function promo($id = null, $estado = null){

    	if($estado){
    		$set = ['promocion' => $estado];
    	}else{
    		$set = ['promocion' => $estado, 'precio_promocion' => '0.00'];
    	}
    	
        $this->loadModel('Productos');
        $query = $this->Productos->query();
        $query->update()
            ->set($set)
            ->where(['id' => $id])
            ->execute();

        return $this->redirect(['action' => 'index']);
    }

    public function status($id = null, $estado = null){

        $set = ['status' => $estado];
        
        $this->loadModel('Productos');
        $query = $this->Productos->query();
        $query->update()
            ->set($set)
            ->where(['id' => $id])
            ->execute();

        return $this->redirect(['action' => 'index']);
    }

     public function preciopromo(){

        $this->loadModel('Productos');
        
        $query = $this->Productos->query();
        $query->update()
            ->set(['precio_promocion' => @$this->revertir_moneda($this->request->data['precio_promocion'])])
            ->where(['id' => @$this->request->data['id']])
            ->execute(); 

        if ($query) {
            $this->Flash->success(__('Promotion price assigned'));
        } else {
            $this->Flash->error(__('Error. Try again'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
