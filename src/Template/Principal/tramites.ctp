<?= $this->Flash->render() ?>
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5d1b20552f95b" data-node="5d1b20552f95b">
            <div class="fl-row-content-wrap" style="padding-bottom: 40px; padding-top: 40px">
                <div class="fl-row-content fl-row-fixed-width fl-node-content">
                    <div class="fl-col-group fl-node-5d1b20552f956" data-node="5d1b20552f956">
                        <div class="fl-col fl-node-5d1b20552f958" data-node="5d1b20552f958">
                            <div class="fl-col-content fl-node-content">
                                <div class="fl-module fl-module-uabb-heading fl-node-5d1b20552f95a" data-node="5d1b20552f95a">
                                    <div class="fl-module-content fl-node-content">
                                        <div class="uabb-module-content uabb-heading-wrapper uabb-heading-align-center ">
                                            <h1 class="uabb-heading">
                                                <span class="uabb-heading-text">
                                                   Purchase History
                                                </span>
                                            </h1>
                                            <div class="uabb-module-content uabb-separator-parent">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fl-row fl-row-fixed-width fl-row-bg-none fl-node-5d1af79b8c33f" data-node="5d1af79b8c33f">
          <div class="fl-row-content-wrap">
              <div class="fl-row-content fl-row-fixed-width fl-node-content">
                  <div class="fl-col-group fl-node-5d1af7ebbb99e" data-node="5d1af7ebbb99e">
                      <div class="fl-col fl-node-5d1af7ebbbb5f" data-node="5d1af7ebbbb5f">
                          <div class="fl-col-content fl-node-content">
                              <div class="fl-module fl-module-image-icon fl-node-5d1af7a55053e" data-node="5d1af7a55053e">
                                  <div class="fl-module-content fl-node-content">
                                      <div class="uabb-module-content uabb-imgicon-wrap">
                                          <div class="uabb-image uabb-image-crop-simple " itemscope="" itemtype="http://schema.org/ImageObject">
                                              <div class="uabb-image-content">
                                                  <?=$this->html->image('hoja.png', ['class' => 'uabb-photo-img wp-image-1769 size-full', 'style' => 'width: 110px']);?>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
              <!--<h3 class="mb-30">Trámites-->
                <br>
                <br>
             
              </h3>
                <thead style="background: #dee2e6">
                    <!--<th><?= $this->Paginator->sort('empresa') ?></th>-->
                    <th style="font-family: initial"><?= $this->Paginator->sort('fecha', 'Date Order') ?></th>
                    <th style="font-family:  initial">Order #</th>
                    <th style="font-family: initial"><?= $this->Paginator->sort('monto_a_pagar', 'Total') ?></th>
                  <!--  <th style="font-family: 'Lobster', initial"><?= $this->Paginator->sort('monto_a_pagar', 'Total Bs.S') ?></th>-->
                    <th style="font-family: initial"><?= $this->Paginator->sort('status') ?></th>
                    <!--<th style="font-family: initial"><?= $this->Paginator->sort('fecha_pago', 'Payment date') ?></th>
                    <th><?= $this->Paginator->sort('motorizado', 'Motorizado Asignado') ?></th>-->
                    <th style="font-family: initial; text-align: center;">View</th>
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
                              <!--<td>
                                <?= $registro->empresa ?>
                              </td>-->
                              <td>
                                <?= date_format($registro->fecha, 'm/d/Y') ?>
                              </td>
                              <td>
                                <?= $codigo ?>
                              </td>
                              <td>
                              $ <?= number_format($registro->monto_a_pagar, 2, '.', ',') ?>
                              </td>
                              <!--<td>
                                <?= number_format($registro->monto_bs, 2, '.', ','), ' Bs' ?>
                              </td>-->
                              <td>
                                <?= $registro->status ?>
                                <?php 
                                  if($registro->estatus == 1){
                                    echo " <i style='color:blue' class='fa fa-spinner'>";
                                  }else if($registro->estatus == 2){
                                    echo " <i style='color:red' class='fa fa-times'></i>";
                                  }else if($registro->estatus == 3){
                                    echo " <i style='color:green' class='fa fa-credit-card'></i> ";
                                  }else if($registro->estatus == 4){
                                    echo " <i style='color:red' class='fa fa-archive'></i> ";
                                  }else if($registro->estatus == 5){
                                    echo " <i style='color:blue' class='fa fa-bus'></i>";
                                  }else if($registro->estatus == 6){
                                    echo " <i style='color:green' class='fa fa-check'></i>";
                                  }
                                ?>
                              </td>  
                              <!--<td>
                                <?= date_format($registro->fecha_pago, 'm/d/Y')?>
                              </td>-->
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
                                  
                                <p style="font-family: initial;"> <!--Pending...--></p>                               
                                <?php } ?>

                                <?php if($registro->estatus == 2){ ?>

                                 <a 
                                 data-toggle="modal"
                                    id = "<?= $registro->id ?>"
                                    motivo = "<?= $registro->motivo ?>"
                                    onclick="declina(this);" class="btn btn-danger" style="color: white">View See
                                  </a>                                
                                <?php } ?>

                                <?php if($registro->estatus >= 3){
                                    echo $this->Form->postLink(__('View Order'), ['action' => 'reporte', @$registro->id, 'PDF'], ['class' => 'single_add_to_cart_button button alt', 'tabindex' => '-1', 'escape' => false]);
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
         <!-- <strong>Legend:  </strong> 
          (<i style='color:red' class='fa fa-spinner'></i> Pending)  
          (<i style='color:blue' class='fa fa-credit-card'></i> Approved o Cancelled)  
          (<i style='color:green' class='fa fa-check'></i> Delivered)
          <!--(<i style='color:red' class='fa fa-archive'></i> POR REMITIR)
          (<i style='color:blue' class='fa fa-bus'></i> EN CAMINO)
          (<i style='color:orange' class='fa fa-home'></i> ENTREGADO)-->
        <div class="fl-module fl-module-uabb-button fl-node-5d1b01cdd9947" data-node="5d1b01cdd9947">
                            <div class="fl-module-content fl-node-content">
                                <div class="uabb-module-content uabb-button-wrap uabb-creative-button-wrap uabb-button-width-auto uabb-creative-button-width-auto uabb-button-left uabb-creative-button-left uabb-button-reponsive-center uabb-creative-button-reponsive-center uabb-button-has-icon uabb-creative-button-has-icon">
                                   
                                        <span class="uabb-button-text uabb-creative-button-text">
                                            <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i> Shop Now </div>', ['controller' => 'principal', 'action' => 'menu'], ["class" => "uabb-button-text uabb-creative-button-text", 'tabindex' => '-1','escape' => false]) ?>
                                        </span>
                                   
                                </div>
                            </div>
                        </div>
        </center>

  <br>
  <br>
  <br>
  </div>
</div>
</main>


<?= $this->element('motivo') ?>