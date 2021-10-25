  <?= $this->Flash->render() ?>

<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
    
        <div class="section-top-border">
            <table class="table table-hover ">
            	<h3 class="mb-30">Movimientos</h3>
                <thead>
                    <th><?= $this->Paginator->sort('empresa') ?></th>
                    <th> </th>
                    <th><?= $this->Paginator->sort('producto') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('estatu', 'Estatus') ?></th>
                </thead>
                <tbody>
                    <?php $n = count($movimientos); if (isset($movimientos) && $n!=0){ ?>
                        <?php foreach ($movimientos as $registros): ?>
                          <tr>
                            <td>
                                <?= $registros->empresa ?>
                              </td>
                              <td>
                                <?= $this->Html->image('../productos/productos/photo/'.$registros->photo_dir.'/'.$registros->photo, ['height' => '100']) ?>
                              </td>
                              <td>
                                <?= $registros->producto ?>
                              </td>
                              <td>
                                <?= $registros->cantidad ?>
                              </td>
                              <td>
                                <?= number_format($registros->precio, 2, ',', '.'), ' Bs'; ?>
                              </td>
                              <td>
                                <?= date_format($registros->fecha, 'd/m/Y') ?>
                              </td>
                              <td>
                                <?= $registros->estatu ?>
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