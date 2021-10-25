 <?= $this->Flash->render() ?>

<div class="whole-wrap">
    <div class="container box_1170">
    
        <div class="section-top-border">
            <button type="button" class="genric-btn info circle pull-right" data-toggle="modal" data-target="#agregar_motorizado">Agregar</button>
            <h3 class="mb-30">Morotizados Registrados</h3>
 
            <table class="table table-hover ">
                <thead>
                    <th><?= $this->Paginator->sort('cedula', 'Identificación') ?></th>
                    <th><?= $this->Paginator->sort('nombres', 'Nombres') ?></th>
                    <th><?= $this->Paginator->sort('placa', 'Placas') ?></th>
                    <th><?= $this->Paginator->sort('fecha_registro') ?></th>
                    <th>Accion</th>
                    <th><?= $this->Paginator->sort('estatu', 'Estatus') ?></th>
                    <th><?= "Historial" ?></th>
                </thead>
                <tbody>
                    <?php $n = count($usuarios); if (isset($usuarios) && $n!=0){ ?>
                        <?php foreach ($usuarios as $usuarios): ?>
                          <tr>
                              <td>
                                <?= $usuarios->letra . "-" . $usuarios->cedula ?>
                              </td>
                              <td>
                                <?= $usuarios->nombres ?> 
                              </td>
                              <td>
                                <?= $usuarios->placa ?>
                              </td>
                              <td>
                                <?= date_format($usuarios->fecha_registro, 'd/m/Y') ?>
                              </td>
                              <td>
                                <a data-toggle="modal"
                                  id = "<?= $usuarios->id ?>"
                                  identificacion = "<?= $usuarios->letra . "-" . $usuarios->cedula ?>"
                                  cedula ="<?= $usuarios->cedula ?>"
                                  letra ="<?= $usuarios->letra ?>"
                                  nombres ="<?= $usuarios->nombres ?>"
                                  correo ="<?= $usuarios->correo ?>"
                                  placa ="<?= $usuarios->placa ?>"
                                  movil ="<?= $usuarios->movil ?>"
                                  fijo ="<?= $usuarios->fijo ?>"
                                  direccion ="<?= $usuarios->direccion ?>"
                                  nota ="<?= $usuarios->nota ?>"
                                  onclick="modificar_motorizados(this);" class="genric-btn success circle arrow" style="color: white">Editar
                                </a>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deleteMotorizados', @$usuarios->id], ['confirm' => __('Desea eliminarlo?'), 'class' => 'genric-btn danger circle arrow']) ?>
                       
                              </td>
                              <td>
                                  <?php
                                    if(@date_format($usuarios->fecha_disponible, 'Y-m-d') == date('Y-m-d')){
                                      echo $this->Form->postLink("Disponible &nbsp <i style='color:green' class='fa fa-check'></i>", ['action' => 'estadoMotorizado', $usuarios->id, 0], ['class' => 'genric-btn info-border circle', 'tabindex' => '-1', 'escape' => false]);
                                    }else{
                                      echo $this->Form->postLink("Indispuesto &nbsp <i style='color:red' class='fa fa-close'></i>", ['action' => 'estadoMotorizado', $usuarios->id, 1], ['class' => 'genric-btn danger-border circle', 'tabindex' => '-1', 'escape' => false]);
                                    }
                                  ?>
                              </td>
                              <td>
                                  <a data-toggle="modal"
                                  id = "<?= $usuarios->id ?>"
                                  onclick="ver_historial(this);" class="genric-btn danger-border circle"
                                  title="Historial de Envios" >
                                  <i  class='fa fa-clock'></i>
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
<?= $this->element('agregar_motorizados') ?>
<?= $this->element('modificar_motorizados') ?>
<?= $this->element('ver_historial') ?>

       