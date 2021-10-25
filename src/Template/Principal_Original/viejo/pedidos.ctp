<?= $this->Flash->render() ?>
<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
    
        <div class="section-top-border">
          <table class="table table-hover ">
        	   <h3 class="mb-30">Pedidos</h3>    
                <thead>
                    <th><?= $this->Paginator->sort('Cliente') ?></th>
                    <th><?= $this->Paginator->sort('Cedula') ?></th>
                    <th><?= $this->Paginator->sort('Direccion') ?></th>
                    <th><?= $this->Paginator->sort('Empresa') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('estatu', 'Estatus') ?></th>
                    <th>ACCION</th>
                </thead>
                <tbody>
                    <?php $n = count($pedidos); if (isset($pedidos) && $n!=0){ ?>
                        <?php foreach ($pedidos as $pedidos): ?>
                          <tr>
                              <td>
                                <?= $pedidos->usuario ?>
                              </td>
                              <td>
                                <?= $pedidos->usuario_cedula ?>
                              </td>
                              <td>
                                <?= $pedidos->direccion_envio ?>
                              </td>
                              <td>
                                <?= $pedidos->empresa ?>
                              <td>
                                <?= date_format($pedidos->fecha, 'd/m/Y') ?>
                              </td>
                              <td>
                                <?= $pedidos->status ?>
                              </td>
                              <td>
                                <?php if($pedidos->estatus == 4){ ?>
                                   <?= $this->Form->postLink(__('Remitir'), ['action' => 'remitir', @$pedidos->id, $pedidos->estatus, 1], ['class' => 'genric-btn danger circle arrow', 'confirm' => '¿Seguro desea remitirlo?']) ?>
                                <?php }else if($pedidos->estatus == 5){ ?>
                                   <?= $this->Form->postLink(__('Entregar'), ['action' => 'entregado', @$pedidos->id, $pedidos->estatus, 1], ['class' => 'genric-btn danger circle arrow', 'confirm' => '¿Seguro desea entregarlo?']) ?>
                                <?php } ?>

                                
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