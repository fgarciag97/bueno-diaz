<!--MENU PARA TELEFONO-->
<link href="../fonts/ionicons.css" rel="stylesheet">

<section class="h-500x main-slider pos-relative" style="background: url(../img/tramites.jpg) no-repeat center; background-size: cover">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h2 class="mt-30 mb-15" style="font-family: initial;">My Procedures</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<?= $this->Flash->render() ?>
<div class="container-fluid" style="font-size: 18px; font-family: initial">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
              <!--<h3 class="mb-30">Trámites-->
                <br>
                <br>
             
              </h3>
                <thead style="background: #dee2e6">
                    <th style="font-family:  initial">Code</th>
                    <!--<th><?= $this->Paginator->sort('empresa') ?></th>-->
                    <th style="font-family: initial"><?= $this->Paginator->sort('fecha', 'Date and Time') ?></th>
                    <th style="font-family: initial"><?= $this->Paginator->sort('monto_a_pagar', 'Total $$$') ?></th>
                  <!--  <th style="font-family: 'Lobster', initial"><?= $this->Paginator->sort('monto_a_pagar', 'Total Bs.S') ?></th>-->
                    <th style="font-family: initial"><?= $this->Paginator->sort('status') ?></th>
                    <th style="font-family: initial"><?= $this->Paginator->sort('fecha_pago', 'Payment date') ?></th>
                    <!--<th><?= $this->Paginator->sort('motorizado', 'Motorizado Asignado') ?></th>-->
                    <th style="font-family: initial; text-align: center;">ACTION</th>
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
                              <!--<td>
                                <?= $registro->empresa ?>
                              </td>-->
                              <td>
                                <?= date_format($registro->fecha, 'd/m/Y') . "  " . date_format($registro->hora, 'H:m') ?>
                              </td>
                              <td>
                              $ <?= number_format($registro->monto_a_pagar, 2, ',', '.') ?>
                              </td>
                              <!--<td>
                                <?= number_format($registro->monto_bs, 2, ',', '.'), ' Bs' ?>
                              </td>-->
                              <td>
                                <?= $registro->status ?>
                                <?php 
                                  if($registro->estatus == 1){
                                    echo " <i style='color:blue' class='fa fa-credit-card'>";
                                  }else if($registro->estatus == 2){
                                    echo " <i style='color:red' class='fa fa-times'></i>";
                                  }else if($registro->estatus == 3){
                                    echo " <i style='color:green' class='fa fa-check'></i> ";
                                  }else if($registro->estatus == 4){
                                    echo " <i style='color:red' class='fa fa-archive'></i> ";
                                  }else if($registro->estatus == 5){
                                    echo " <i style='color:blue' class='fa fa-bus'></i>";
                                  }else if($registro->estatus == 6){
                                    echo " <i style='color:orange' class='fa fa-home'></i>";
                                  }
                                ?>
                              </td>  
                              <td>
                                <?= date_format($registro->fecha_pago, 'd/m/Y')?>
                              </td>
                              <!--<td>
                                <?php if($registro->estatus >= 4){ ?>
                                  <a data-toggle="modal"
                                    id = "<?= $registro->id ?>"
                                    motorizado = "<?= $registro->motorizado ?>"
                                    cedula = "<?= $registro->motorizado_cedula ?>"
                                    placa = "<?= $registro->placa ?>"
                                    motorizado_nombres = "<?= $registro->motorizado_nombres ?>"
                                    motorizado_movil = "<?= $registro->motorizado_movil ?>"
                                    motorizado_fijo = "<?= $registro->motorizado_fijo ?>"
                                    onclick="ver_motorizado(this);" class="genric-btn info-border medium">Ver
                                  </a>
                                <?php } ?>
                              </td>-->
                              <td style="text-align: center">
                                <?php if($registro->estatus == 1){ ?>
                                  
                                <p style="font-family: initial;"> Waiting...</p>                               
                                <?php } ?>

                                <?php if($registro->estatus == 2){ ?>

                                 <a 
                                 data-toggle="modal"
                                    id = "<?= $registro->id ?>"
                                    motivo = "<?= $registro->motivo ?>"
                                    onclick="declina(this);" class="btn-brdr-primary plr-15">See
                                  </a>                                
                                <?php } ?>

                                <?php if($registro->estatus >= 3){
                                    echo $this->Form->postLink(__('Receipt<i style="color:red" class="fa fa-file-pdf-o"></i>'), ['action' => 'reporte', @$registro->id], ['class' => 'btn-brdr-primary plr-15', 'tabindex' => '-1', 'escape' => false]);
                                  } ?>
                              </td><!--
                              <td>
                                 <?php if($registro->estatus == 6 and $registro->estrellas == null){ ?>
                                <a data-toggle="modal"
                                    id = "<?= $registro->id ?>"
                                    onclick="clasificar(this);" class="genric-btn info circle pull-right">Clasificar
                                </a>
                                  <?php } ?>
                              </td>-->
                          </tr>
                        <?php endforeach; ?>
                    <?php } else{ ?>
                        <tr>
                            <td colspan="10">There are no records</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
      </div>
    </div>


        <center> 
          <strong>Legend:  </strong> 
          (<i style='color:blue' class='fa fa-credit-card'></i> PAID OUT)  
          (<i style='color:red' class='fa fa-times'></i> REJECTED)  
          (<i style='color:green' class='fa fa-check'></i> APPROVED)
          <!--(<i style='color:red' class='fa fa-archive'></i> POR REMITIR)
          (<i style='color:blue' class='fa fa-bus'></i> EN CAMINO)
          (<i style='color:orange' class='fa fa-home'></i> ENTREGADO)-->
        </center>

  <br>
  <br>
  <br>
  </div>
</div>
</main>


<?= $this->element('motivo') ?>