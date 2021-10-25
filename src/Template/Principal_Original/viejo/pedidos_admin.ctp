<?= $this->Flash->render() ?>
<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
        <div class="section-top-border">
            <table class="table table-hover ">
              <div class="form-row">

                <?php if($estatus == 3){ ?>
            	     <h3 class="mb-30">Pedidos pendientes por asignación</h3>
                <?php }else if($estatus == 4){ ?>
                   <h3 class="mb-30">Pedidos Por Remitir</h3>
                <?php }else if($estatus == 5){ ?>
                   <h3 class="mb-30">Pedidos En camino</h3>
                <?php }else if($estatus == 6){ ?>
                   <h3 class="mb-30">Pedidos Entregados</h3>
                <?php } ?>
                  <!--
                  <?= $this->Form->create('Principal', array('type' => 'post', 'url' => array('controller' => 'Principal', 'action' => 'pedidosAdmin', $estatus))) ?>
                    <div class="form-group col-md-3" style="margin-left: 30%">
                      <?= @$this->Form->input('usuario_cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'placeholder' => 'Cedula', 'onkeyup' => 'mayus(this);', 'maxlength' => 9, 'autocomplete' => 'off']); ?>
                    </div>
                    <div style="margin-top: -5px">
                      <?= $this->Form->button('Buscar', ['class'=>'btn header-btn']); ?>
                    </div>
                   <?php echo $this->Form->end();?>
               </div>
                -->
                <thead>
                    <th>Codigo</th>
                    <th><?= $this->Paginator->sort('Cliente') ?></th>
                    <th> Detalles Cliente </th>
                    <th> Dirección Envio </th>
                    <th><?= $this->Paginator->sort('Empresa') ?></th>
                    <?php if($estatus >= 4){ ?>
                      <th>Motorizado</th>
                    <?php } ?>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th>Accion</th>
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
                                <?= $registro->usuario ?>
                              </td>
                              <td>
                                <a data-toggle="modal"
                                  usuario_cedula = "<?= $registro->usuario_cedula ?>"
                                  usuario_nombres = "<?= $registro->usuario ?>"
                                  usuario_correo = "<?= $registro->usuario_correo ?>"
                                  usuario_movil = "<?= $registro->usuario_movil ?>"
                                  usuario_fijo = "<?= $registro->usuario_fijo ?>"
                                  onclick="ver_cliente(this);" class="genric-btn info-border medium">Ver
                                </a>
                              </td>
                              <td>
                                <a data-toggle="modal"
                                  direccion = "<?= $registro->direccion_envio ?>"
                                  onclick="ver_direccion(this);" class="genric-btn info-border medium">Ver
                                </a>
                              </td>
                              <td>
                                <?= $registro->empresa ?>
                              </td>
                              <td>
                                <?php if($estatus >= 4){ ?>
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
                                <?= date_format($registro->fecha, 'd/m/Y') . "  " . date_format($registro->hora, 'h:m a') ?>
                              </td>
                              <td>
                                <?php if($estatus == 3){ ?>
                                   <a data-toggle="modal"
                                    id = "<?= $registro->id ?>"
                                    estatus = "<?= $estatus ?>"
                                    onclick="asignar_motorizado(this);" class="genric-btn info-border circle">Asignar Motorizado
                                  </a>
                                <?php }else if($estatus == 4){ ?>
                                   <?= $this->Form->postLink(__('Remitir'), ['action' => 'remitir', @$registro->id, $estatus], ['class' => 'genric-btn danger circle arrow', 'confirm' => '¿Seguro que desea remitirlo?']) ?>
                                <?php }else if($estatus == 5){ ?>
                                   <?= $this->Form->postLink(__('Entregado'), ['action' => 'entregado', @$registro->id, $estatus], ['class' => 'genric-btn danger circle arrow']) ?>
                                <?php }else if($estatus == 6){ ?>
                                    <i style='color:orange' class='fa fa-home'></i> Entregado
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

<?= $this->element('ver_cliente') ?>
<?= $this->element('ver_direccion') ?>
<?= $this->element('ver_motorizado') ?>
<?= $this->element('asignar_motorizado') ?>