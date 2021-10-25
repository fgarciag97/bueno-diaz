<main>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Orders</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
                    <th>Order #</th>
                    <th><?= $this->Paginator->sort('fecha', 'Date') ?></th>
                    <th><?= $this->Paginator->sort('monto_a_pagar', 'Total') ?></th>
                    <!--<th><?= $this->Paginator->sort('monto_bs', 'Total Bs.S') ?></th>-->
                    <th><?= $this->Paginator->sort('fecha_pago', 'Date Delivered') ?></th>
                    <th style="text-align: center;"><?= $this->Paginator->sort('Detalles', 'Details') ?></th>
                    <th><?= $this->Paginator->sort('estatus', 'Status') ?></th>
                    <th style="text-align: center;"><?= "Action" ?></th>
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
                                <?= date_format($registro->fecha, 'm-d-Y') . "  " . date_format($registro->hora, 'H:m') ?>
                              </td>
                              <td>
                                <?= '$', @number_format($registro->monto_a_pagar, 2, '.', ','); ?>
                              </td>
                              <td>
                                <?php 
                                  if($registro->estatus >= 6){
                                    echo @date_format($registro->fecha_entrega, 'm-d-Y') . "  " . @date_format($registro->hora_entrega, 'H:m');
                                  }
                                ?>
                              </td>
                              <!-- <td>
                                <?= @date_format($registro->fecha_pago, 'd/m/Y')?>
                              </td> -->
                              <td style="text-align: center">
                                <a data-toggle="modal"
                                  id = "<?= $registro->id ?>"
                                  onclick="ver_productos(this);"
                                  class="btn btn-dark btn-circle" 
                                  style="color: white">
                                  <i class="fas fa-shopping-cart"></i>
                                </a>
                                <a data-toggle="modal"
                                  usuario_cedula = "<?= $registro->usuario_cedula ?>"
                                  usuario_nombres = "<?= $registro->usuario ?>"
                                  usuario_correo = "<?= $registro->usuario_correo ?>"
                                  usuario_movil = "<?= $registro->usuario_movil ?>"
                                  usuario_fijo = "<?= $registro->usuario_fijo ?>"
                                  direccion = "<?= $registro->direccion ?>"
                                  company = "<?= $registro->company ?>"
                                  apellidos = "<?= $registro->apellidos ?>"
                                  compania = "<?= $registro->compania ?>"
                                  direccion_envio = "<?= $registro->direccion_envio ?>"
                                  onclick="ver_cliente(this);" 
                                  class="btn btn-dark btn-circle" 
                                  style="color: white">
                                  <i class="fas fa-user"></i>
                                </a>
                                 <a data-toggle="modal"
                                  id = "<?= $registro->id ?>" 
                                  monto_a_pagar = "<?= '$ ' .  number_format($registro->monto_a_pagar, 2, '.', ',') ?>"
                                  banco = "<?= $registro->banco ?>"
                                  numero_cuenta = "<?= $registro->numero_cuenta ?>"
                                  tipo_cuenta = "<?= $registro->tipo_cuenta ?>"
                                  identificacion = "<?= $registro->identificacion ?>"
                                  titular = "<?= $registro->titular ?>"
                                  telefono = "<?= $registro->telefono ?>"
                                  correo = "<?= $registro->correo ?>"
                                  referencia = "<?= $registro->referencia ?>"
                                  fecha_pago = "<?= @date_format($registro->fecha_pago, 'Y-m-d') ?>"
                                  concepto = "<?= $registro->concepto ?>"
                                  direccion_envio = "<?= $registro->direccion_envio ?>"
                                  direccion = "<?= $registro->direccion ?>"
                                  code = "<?= $registro->code ?>"
                                  state = "<?= $registro->state ?>"
                                  usuario_cedula = "<?= $registro->usuario_cedula ?>"
                                  usuario_nombres = "<?= $registro->usuario ?>"
                                  usuario_correo = "<?= $registro->usuario_correo ?>"
                                  usuario_movil = "<?= $registro->usuario_movil ?>"
                                  usuario_fijo = "<?= $registro->usuario_fijo ?>"
                                  direccion = "<?= $registro->direccion ?>"
                                  company = "<?= $registro->company ?>"
                                  apellidos = "<?= $registro->apellidos ?>"
                                  compania = "<?= $registro->compania ?>"
                                  direccion_envio = "<?= $registro->direccion_envio ?>"
                                  onclick="detalles_pago(this);" 
                                  class="btn btn-dark btn-circle" 
                                  style="color: white">
                                  <i class="fas fa-credit-card"></i>
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
                                    echo " <i style='color:green' class='fa fa-credit-card'></i> ";
                                  }else if($registro->estatus == 4){
                                    echo " <i style='color:blue' class='fa fa-bus'></i>";
                                  }else if($registro->estatus == 5){
                                    echo " <i style='color:orange' class='fa fa-home'></i>";
                                  }
                                  else if($registro->estatus == 6){
                                    echo " <i style='color:green' class='fa fa-check'></i>";
                                  }
                                ?>
                              </td>
                              <td style="text-align: center;">
                                  <?php if($registro->estatus == 1){
                                    echo $this->Form->postLink(__('<i class="fas fa-thumbs-up"></i>'), ['action' => 'revision', $registro->id, 3], ['class' => 'btn btn-primary btn-circle', 'tabindex' => '-1', 'escape' => false, 'confirm' => ['Are you sure you want to approve it?']]); ?>
                                  
                                    <a data-toggle="modal"
                                      id = "<?= $registro->id ?>"
                                      motivo = "<?= $registro->motivo ?>"
                                      onclick="declina(this);" 
                                      class="btn btn-danger btn-circle"><i style='color:white' class='fa fa-thumbs-down'></i>
                                    </a>

                                  <?php } ?>

                                  <!--<?php if($registro->estatus == 2 or $registro->estatus == 3){
                                    echo $this->Form->postLink("Revertir &nbsp <i style='color:blue' class='fa fa-undo'></i>", ['action' => 'revision', $registro->id, 1], ['class' => 'genric-btn default-border circle arrow', 'tabindex' => '-1', 'escape' => false, 'confirm' => ['¿Seguro que desea revertirlo?']]);
                                  } ?>-->

                                  <?php if($registro->estatus == 3){
                                   

                                     echo $this->Form->postLink(__('<i class="fas fa-truck"></i>'), ['action' => 'revision', $registro->id, 6], ['class' => 'btn btn-primary btn-circle', 'tabindex' => '-1', 'escape' => false, 'confirm' => ['Are you sure you want to approve it?']]); 
                                 


                                  } ?>

                                  <?php if($registro->estatus == 6){

                                     echo $this->Form->postLink(__('<i class="fas fa-receipt"></i>'), ['action' => 'reporte', @$registro->id, 'Report'], ['class' => 'btn btn-info btn-circle', 'tabindex' => '-1', 'escape' => false, 'target' => '_blank']);

                                    } ?>

                              </td>
                          </tr>
                        <?php endforeach; ?>
                    <?php } else{ ?>
                        <tr>
                            <td colspan="7">There are no records</td>
                        </tr>
                    <?php } ?>
                </tbody>
        </table>
      </div>
    </div>

     <div class="row">
      <div class="col-sm-12 col-md-11">
          <div class="paginator">
              <ul class="pagination">
                  <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                  <?= $this->Paginator->numbers(['after' => '', 'before' => '']) ?>
                  <?= $this->Paginator->next(__('Following') . ' >') ?>
              </ul>
          </div>
        <center> 
          <strong>Legend:  </strong> 
          (<i style='color:blue' class='fa fa-credit-card'></i> PAID OUT)  
          (<i style='color:red' class='fa fa-close'></i> REJECTED)  
          (<i style='color:green' class='fa fa-check'></i> APPROVED)
        </center>
        <br>
      </div>
    </div>

  </div>
</div>
</main>






<?= $this->element('detalles_pago') ?>
<?= $this->element('ver_cliente') ?>
<?= $this->element('ver_productos') ?>

<?= $this->element('rechazar') ?>
<?= $this->element('motivo') ?>








<!--<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
    
        <div class="section-top-border">
            <table class="table table-hover ">
              <h3 class="mb-30">Pedidos</h3>
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
                                <?= number_format($registro->monto_a_pagar, 2, '.', ','), ' Bs'; ?>
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
                                  monto_a_pagar = "<?= number_format($registro->monto_a_pagar, 2, '.', ','), ' Bs' ?>"
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

                                  <?php } ?>-->

                                  <!--<?php if($registro->estatus == 2 or $registro->estatus == 3){
                                    echo $this->Form->postLink("Revertir &nbsp <i style='color:blue' class='fa fa-undo'></i>", ['action' => 'revision', $registro->id, 1], ['class' => 'genric-btn default-border circle arrow', 'tabindex' => '-1', 'escape' => false, 'confirm' => ['¿Seguro que desea revertirlo?']]);
                                  } ?>-->

                                  <!--<?php if($registro->estatus >= 3){
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
</div>-->