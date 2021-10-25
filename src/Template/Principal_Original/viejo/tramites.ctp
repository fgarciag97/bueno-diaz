 <?= $this->Flash->render() ?>

<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
        <div class="section-top-border">
            <table class="table table-hover ">
                  
              <h3 class="mb-30">Trámites
             
              </h3>
                <thead>
                    <th>Codigo</th>
                    <th><?= $this->Paginator->sort('empresa') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('monto_a_pagar', 'Monto Total') ?></th>
                    <th><?= $this->Paginator->sort('estatus') ?></th>
                    <th><?= $this->Paginator->sort('fecha_pago') ?></th>
                    <th><?= $this->Paginator->sort('motorizado', 'Motorizado Asignado') ?></th>
                    <th>ACCION</th>
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
                                <?= $registro->empresa ?>
                              </td>
                              <td>
                                <?= date_format($registro->fecha, 'd/m/Y') . "  " . date_format($registro->hora, 'H:m') ?>
                              </td>
                              <td>
                                <?= number_format($registro->monto_a_pagar, 2, ',', '.'), ' Bs'; ?>
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
                              <td>
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
                              </td>
                              <td>
                                <?php if($registro->estatus == 5){ ?>
                                <?= $this->Form->postLink(__('Recibido'), ['action' => 'entregado', @$registro->id, $registro->estatus, 2], ['class' => 'genric-btn danger circle arrow', 'confirm' => '¿Seguro desea entregarlo?']) ?>
                                <?php } ?>

                                <?php if($registro->estatus >= 3){
                                    echo $this->Form->postLink(__('Recibo &nbsp <i style="color:red" class="fa fa-file-pdf-o"></i>'), ['action' => 'reporte', @$registro->id], ['class' => 'genric-btn danger-border circle', 'tabindex' => '-1', 'escape' => false]);
                                  } ?>
                              </td>
                              <td>
                                 <?php if($registro->estatus == 6 and $registro->estrellas == null){ ?>
                                <a data-toggle="modal"
                                    id = "<?= $registro->id ?>"
                                    onclick="clasificar(this);" class="genric-btn info circle pull-right">Clasificar
                                </a>
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

        <br>
        <br>

        <center> 
          <strong>Leyenda:  </strong> 
          (<i style='color:blue' class='fa fa-credit-card'></i> PAGADO)  
          (<i style='color:red' class='fa fa-close'></i> RECHAZADO)  
          (<i style='color:green' class='fa fa-check'></i> APROBADO)
          (<i style='color:red' class='fa fa-archive'></i> POR REMITIR)
          (<i style='color:blue' class='fa fa-bus'></i> EN CAMINO)
          (<i style='color:orange' class='fa fa-home'></i> ENTREGADO)
        </center>

        <br>
    </div>
</div>

<?= $this->element('ver_motorizado') ?>
<?= $this->element('agregar_comentario') ?>