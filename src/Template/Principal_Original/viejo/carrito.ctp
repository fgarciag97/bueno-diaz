<?= $this->Flash->render() ?>

<?php if(count($carrito) == 0){ ?>
      <div class="whole-wrap">
        <div class="container box_1170">
        
            <div class="section-top-border" style="padding: 15% 0 20%;">
                <center> <h3 class="mb-30 principal"> Sin Productos en el carrito</h3> </center>
            </div>
        </div>
      </div>
<?php } ?>

<?php foreach ($carrito as $c) { ?>

  <div class="whole-wrap">
    <div class="container box_1170">
    
        <div class="section-top-border" style="padding: 50px 0 20px;">
            
            <h3 class="mb-30 principal"> <?= $c['empresa'] ?><?= $this->Form->postLink(__('Seguir comprando'), ['action' => 'index'], ['class' => 'genric-btn info circle arrow', 'style' => 'margin-left: 75%; font-family: sans-serif']) ?></h3>
        </div>
    </div>
  </div>

  <!--================Cart Area =================-->
  <section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
                <th scope="col">Acción</th>
              </tr>
            </thead>
            <tbody>
              
              <?php $total = 0 ?>
              <?php $cantidad = 0 ?>

              <?php foreach ($productos as $key) { ?>

                <?php if($key['id_carrito'] == $c['id']){ ?>
                  <tr>
                    <td>
                      <div class="media">
                        <div class="d-flex">
                          <?= $this->Html->image('../productos/productos/photo/'.$key->photo_dir.'/'.$key->photo, ['height' => '100']) ?>
                        </div>
                        <div class="media-body">
                          <p><?= $key['denominacion'] ?></p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5 class="subtitulo"><?= number_format($key['precio'], 2, ',', '.'); ?></h5>
                    </td>
                    <td>
                      <div class="product_count" >
                        <?= $this->Form->create(@$carrito, ['url' => ['action' => 'editarcarrito']]) ?>
                            <?= $this->Form->hidden('id', ['type' => 'text', 'readonly', 'maxlength' => 3, 'autocomplete' => 'off', 'value' => $key->id, 'label' => false]); ?>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <?= $this->Form->input('cantidad', ['type' => 'number', 'onKeyPress' => 'return soloNum(event);', 'maxlength' => 3, 'autocomplete' => 'off', 'value' => $key->cantidad, 'label' => false]); ?>
                              </div>
                              <div class="form-group col-md-6">
                                <button type="submit" class="genric-btn info-border circle" style="margin-top: 2%"> <i class="fa fa-plus"></i> </button>
                              </div>
                            </div>
                        <?= $this->Form->end() ?>
                      </div>
                    </td>
                    <td>
                      <h5><?= number_format($key['precio'] * $key['cantidad'], 2, ',', '.'); ?></h5>
                    </td>
                    <td>
                      <?= $this->Form->postLink(__('Eliminar'), ['action' => 'sacarCarrito', @$key->id, @$key->id_carrito, @$key->id_empresa], ['confirm' => __('Desea eliminarlo?'), 'class' => 'genric-btn danger circle arrow']) ?>
                    </td>
                  </tr>

                    <?php $total += $key['precio'] * $key['cantidad']; ?>
                    <?php $cantidad += $key['cantidad']; ?>
                  <?php } ?>
              <?php } ?>



              <tr>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <?= $cantidad; ?>
                </td>
                <td>
                  <h5><?= number_format($total, 2, ',', '.'); ?></h5>
                </td>
                <td>
                </td>

              </tr>
            </tbody>
          </table>
              <a data-toggle="modal"
                id = "<?= $c->id ?>"
                monto = "<?= number_format($c->monto_a_pagar, 2, ',', '.'); ?>"
                onclick="pagar(this);" 
                class="btn_1 checkout_btn_1 circle pull-right" 
                style="color: white">Pagar
              </a>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?= $this->element('pagar') ?>