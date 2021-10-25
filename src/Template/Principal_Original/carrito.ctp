<!--MENU PARA TELEFONO-->
<link href="../fonts/ionicons.css" rel="stylesheet">

<section class="h-500x main-slider pos-relative" style="background: url(../img/carrito.jpg) no-repeat center; background-size: cover">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h2 class="mt-30 mb-15" style="font-family: initial;">Purchases</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>

<?= $this->Flash->render() ?>

<?php if(count($carrito) == 0){ ?>
      <div class="whole-wrap">
        <div class="container box_1170">
        
            <div class="section-top-border" style="padding: 15% 0 20%;">
                <center> <h3 class="mb-30 principal">There are no products in the cart.</h3> </center>
            </div>
        </div>
      </div>
<?php } ?>

<?php foreach ($carrito as $c) { ?>

  <!--================Cart Area =================-->
  <section class="cart_area" style="font-family: initial">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              
              <?php $total = 0 ?>
              <?php $total_bs = 0 ?>
              <?php $cantidad = 0 ?>

              <?php foreach ($productos as $key) { ?>

                <?php if($key['id_carrito'] == $c['id']){ ?>
                  <tr>

                    <td>
                      <div class="sided-90x mb-30 ">
                          <div class="s-left">
                           <?= $this->Html->image('../productos/productos/photo/'.$key->photo_dir.'/'.$key->photo, ['height' => '100']) ?>
                                  
                          </div>
                          <div class="s-right">
                                  <h5 class="mb-10">
                                      <?= $key->denominacion ?>
                                   </h5>
                                  <p class="pr-70"><?= $key->descripcion ?></p>
                          </div>
                      </div>
                    </td>

                    <td>
                      <h5 class="subtitulo"> $ <?= number_format($key['precio'], 2, ',', '.'); ?></h5>
                      <!--<h6 class="subtitulo"> <?= number_format($key['precio_bs'], 2, ',', '.'); ?> Bs</h6>-->
                    </td>


                    <td style="width: 20%">
                      <div class="product_count" >
                        <?= $this->Form->create(@$carrito, ['url' => ['action' => 'editarcarrito']]) ?>
                            <?= $this->Form->hidden('id', ['type' => 'text', 'readonly', 'maxlength' => 3, 'autocomplete' => 'off', 'value' => $key->id, 'label' => false]); ?>
                            <div class="form-row">
                              <div class="form-group col-md-10">
                                <?= $this->Form->input('cantidad', ['type' => 'number', 'onKeyPress' => 'return soloNum(event);', 'maxlength' => 3, 'autocomplete' => 'off', 'value' => $key->cantidad, 'label' => false]); ?>
                              </div>
                              <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-success btn-sm"> <i class="fa fa-plus"></i> </button>
                              </div>
                            </div>
                        <?= $this->Form->end() ?>
                      </div>
                    </td>


                    <td>
                      <h5>$ <?= number_format($key['precio'] * $key['cantidad'], 2, ',', '.'); ?></h5>
                      <!--<h6><?= number_format($key['precio_bs'] * $key['cantidad'], 2, ',', '.'); ?> Bs</h6>-->
                    </td>


                    <td>
                      <?= $this->Form->postLink(__('Remove'), ['action' => 'sacarCarrito', @$key->id, @$key->id_carrito, @$key->id_empresa], ['confirm' => __('You want to delete it?'), 'class' => 'btn btn-danger btn-sm']) ?>
                    </td>


                  </tr>

                    <?php $total += $key['precio'] * $key['cantidad']; ?>
                    <?php $total_bs += $key['precio_bs'] * $key['cantidad']; ?>
                    <?php $cantidad += $key['cantidad']; ?>
                  <?php } ?>
              <?php } ?>



              <tr>
                <td></td>
                <td>
                  <h5>Total</h5>
                </td>
                <td>
                  <?= $cantidad; ?>
                </td>
                <td>
                  <h5>$ <?= number_format($total, 2, ',', '.'); ?></h5>
                  <!--<h6><?= number_format($total_bs, 2, ',', '.'); ?> Bs</h6>-->
                </td>
                <td>
                  <a data-toggle="modal"
                    id = "<?= $c->id ?>"
                    monto = "<?= number_format($total, 2, ',', '.'); ?>"
                    monto_bs = "<?= number_format($total_bs, 2, ',', '.'); ?>"
                    onclick="pagar(this);" 
                    class="btn btn-info " 
                    style="color: white">Pay
                  </a>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
<?php } ?>


<?= $this->element('pagar') ?>