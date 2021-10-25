 <?= $this->Flash->render() ?>

<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
    
        <div class="section-top-border">
            <table class="table table-hover ">
              <h3 class="mb-30">Trámites</h3>
                <thead>
                    <th>Codigo</th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('monto_a_pagar', 'Monto Total') ?></th>
                    <th><?= $this->Paginator->sort('fecha_pago') ?></th>
                    <th><?= "Detalles" ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= "Acción" ?></th>
                </thead>
                <tbody>
                    <?php $n = count($registros); if (isset($registros) && $n!=0){ ?>
                        <?php foreach ($registros as $registro): 
                          
                           $n = 6 - strlen($registro->id);
                          $codigo = '';
                          for($i=0; $i < $n; $i++){
                              $codigo .= "0";
                          }
                          $codigo .= $registro->id;

                          ?>
                          <tr>
                              <td>
                                <?= $codigo ?>
                              </td>
                              <td>
                                <?= date_format($registro->fecha, 'd/m/Y') . "  " . date_format($registro->hora, 'H:m') ?>
                              </td>
                              <td>
                                <?= number_format($registro->monto_a_pagar, 2, ',', '.'), ' Bs'; ?>
                              </td>
                              <td>
                                <?= date_format($registro->fecha_pago, 'd/m/Y')?>
                              </td>
                              <td>
                                <a data-toggle="modal"
                                  id = "<?= $registro->id ?>"
                                  onclick="ver_productos(this);" class="genric-btn info-border medium"
                                  title="Productos" >
                                  <i  class='fa fa-shopping-cart'></i>
                                </a>
                                <a data-toggle="modal"
                                  usuario_cedula = "<?= $registro->usuario_cedula ?>"
                                  usuario_nombres = "<?= $registro->usuario ?>"
                                  usuario_correo = "<?= $registro->usuario_correo ?>"
                                  usuario_movil = "<?= $registro->usuario_movil ?>"
                                  usuario_fijo = "<?= $registro->usuario_fijo ?>"
                                  onclick="ver_cliente(this);" class="genric-btn info-border medium"
                                  title="Datos del Cliente" >
                                  <i  class='fa fa-user'></i>
                                </a>
                                 <a data-toggle="modal"
                                  id = "<?= $registro->id ?>" 
                                  monto_a_pagar = "<?= number_format($registro->monto_a_pagar, 2, ',', '.'), ' Bs' ?>"
                                  banco = "<?= $registro->banco ?>"
                                  numero_cuenta = "<?= $registro->numero_cuenta ?>"
                                  tipo_cuenta = "<?= $registro->tipo_cuenta ?>"
                                  identificacion = "<?= $registro->identificacion ?>"
                                  titular = "<?= $registro->titular ?>"
                                  telefono = "<?= $registro->telefono ?>"
                                  correo = "<?= $registro->correo ?>"
                                  referencia = "<?= $registro->referencia ?>"
                                  fecha_pago = "<?= date_format($registro->fecha_pago, 'Y-m-d') ?>"
                                  concepto = "<?= $registro->concepto ?>"
                                  direccion_envio = "<?= $registro->concepto ?>"
                                  onclick="detalles_pago(this);" 
                                  class="genric-btn info-border medium"
                                  title="Detalles del Pago" >
                                  <i  class='fa fa-credit-card'></i>
                                </a>
                                <?php if($registro->estatus >= 4){ ?>
                                  <a data-toggle="modal"
                                    id = "<?= $registro->id ?>"
                                    motorizado = "<?= $registro->motorizado ?>"
                                    cedula = "<?= $registro->motorizado_cedula ?>"
                                    placa = "<?= $registro->placa ?>"
                                    motorizado_nombres = "<?= $registro->motorizado_nombres ?>"
                                    motorizado_movil = "<?= $registro->motorizado_movil ?>"
                                    motorizado_fijo = "<?= $registro->motorizado_fijo ?>"
                                    onclick="ver_motorizado(this);" 
                                    class="genric-btn info-border medium"
                                    title="Datos del Motorizado" >
                                    <i class='fa fa-motorcycle'></i>
                                  </a>
                                <?php } ?>
                              </td>
                              <td>
                                <?= $registro->status ?>
                                <?php 
                                  if($registro->estatus == 1){
                                    echo " <i style='color:blue' class='fa fa-credit-card'>";
                                  }else if($registro->estatus == 2){
                                    echo " <i style='color:red' class='fa fa-close'></i>";
                                  }else if($registro->estatus == 3){
                                    echo " <i style='color:green' class='fa fa-check'></i> ";
                                  }else if($registro->estatus == 4){
                                    echo " <i style='color:blue' class='fa fa-bus'></i>";
                                  }else if($registro->estatus == 5){
                                    echo " <i style='color:orange' class='fa fa-home'></i>";
                                  }
                                ?>
                              </td>
                              <td>
                                  <?php if($registro->estatus == 1){
                                    echo $this->Form->postLink("Aprobar &nbsp <i style='color:green' class='fa fa-check'></i>", ['action' => 'revision', $registro->id, 3], ['class' => 'genric-btn info-border circle', 'tabindex' => '-1', 'escape' => false, 'confirm' => ['¿Seguro que desea aprobarlo?']]); ?> 
                                  
                                    <a data-toggle="modal"
                                      id = "<?= $registro->id ?>"
                                      motivo = "<?= $registro->motivo ?>"
                                      onclick="declina(this);" 
                                      class="genric-btn danger-border circle">
                                      Rechazar &nbsp <i style='color:red' class='fa fa-close'></i>
                                    </a>

                                  <?php } ?>

                                  <!--<?php if($registro->estatus == 2 or $registro->estatus == 3){
                                    echo $this->Form->postLink("Revertir &nbsp <i style='color:blue' class='fa fa-undo'></i>", ['action' => 'revision', $registro->id, 1], ['class' => 'genric-btn default-border circle arrow', 'tabindex' => '-1', 'escape' => false, 'confirm' => ['¿Seguro que desea revertirlo?']]);
                                  } ?>-->

                                  <?php if($registro->estatus >= 3){
                                    echo $this->Form->postLink(__('Recibo &nbsp <i style="color:red" class="fa fa-file-pdf-o"></i>'), ['action' => 'reporte', @$registro->id], ['class' => 'genric-btn danger-border circle', 'tabindex' => '-1', 'escape' => false]);
                                  } ?>
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

        <br>
        <br>

        <center> 
          <strong>Leyenda:  </strong> 
          (<i style='color:blue' class='fa fa-credit-card'></i> PAGADO)  
          (<i style='color:red' class='fa fa-close'></i> RECHAZADO)  
          (<i style='color:green' class='fa fa-check'></i> APROBADO)
        </center>

        <br>
    </div>
</div>

<?= $this->element('detalles_pago') ?>
<?= $this->element('ver_cliente') ?>
<?= $this->element('ver_productos') ?>
<?= $this->element('ver_motorizado') ?>
<?= $this->element('rechazar') ?>