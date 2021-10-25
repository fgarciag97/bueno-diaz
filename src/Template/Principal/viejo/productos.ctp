 <?= $this->Flash->render() ?>

<div class="whole-wrap">
    <div class="container box_1170">
    
        <div class="section-top-border">
            <button type="button" class="genric-btn info circle pull-right" data-toggle="modal" data-target="#agregar_producto">Agregar</button>
            <h3 class="mb-30">Productos Registrados</h3>
 
            <table class="table table-hover ">
                <thead>
                    <th></th>
                    <th><?= $this->Paginator->sort('denominacion') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('disponible') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('grupo') ?></th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php $n = count($productos); if (isset($productos) && $n!=0){ ?>
                        <?php foreach ($productos as $producto): ?>
                          <tr>
                              <td>
                                <?= $this->Html->image('../productos/productos/photo/'.$producto->photo_dir.'/'.$producto->photo, ['height' => '100']) ?>
                              </td>
                              <td>
                                <?= $producto->denominacion ?>
                              </td>
                              <td>
                                <?= $producto->descripcion ?>
                              </td>
                              <td>
                                <?= number_format($producto->precio, 2, ',', '.'); ?>
                              </td>
                              <td>
                                <?= number_format($producto->entrada - $producto->salida - $producto->ajuste, 0, '', ''); ?>
                              </td>
                              <td>
                                <?= $producto->codigo ?>
                              </td>
                              <td>
                                <?= $producto->grupo ?>
                              </td>
                              <td>
                                <a data-toggle="modal"
                                  id = "<?= $producto->id ?>"
                                  id_grupo = "<?= $producto->id_grupo ?>"
                                  denominacion = "<?= $producto->denominacion ?>"
                                  descripcion = "<?= $producto->descripcion ?>"
                                  codigo = "<?= $producto->codigo ?>"
                                  precio = "<?= $producto->precio ?>"
                                  onclick="modificar_producto(this);" class="genric-btn success circle arrow" style="color: white">Editar
                                </a>
                        
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deleteproducto', @$producto->id], ['confirm' => __('Desea eliminarlo?'), 'class' => 'genric-btn danger circle arrow']) ?>

                                <a data-toggle="modal"
                                  id = "<?= $producto->id ?>"
                                  precio = "<?= $producto->precio ?>"
                                  onclick="agregar_cantidad(this);" class="genric-btn info circle arrow"  style="color: white">Cargar
                                </a>

                                <a data-toggle="modal"
                                  id = "<?= $producto->id ?>"
                                  precio = "<?= $producto->precio ?>"
                                  onclick="agregar_ajuste(this);" class="genric-btn warning circle arrow"  style="color: black">Ajustar
                                </a>

                              </td>
                          </tr>
                        <?php endforeach; ?>
                    <?php } else{ ?>
                        <tr>
                            <td colspan="7">No existen registros</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers(['after' => '', 'before' => '']) ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            </ul>
        </div>
    </div>
</div>

<?= $this->element('agregar_producto') ?>
<?= $this->element('modificar_producto') ?>
<?= $this->element('agregar_cantidad') ?>
<?= $this->element('agregar_ajuste') ?>