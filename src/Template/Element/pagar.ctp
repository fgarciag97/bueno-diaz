<!--Modal: Login / Register Form-->
<div class="modal fade" id="pagar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-credit-card mr-1"></i>
              Review Your Order</a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab" ><i class="fas fa-dollar-sign mr-1"></i>
              Cash</a>
          </li>-->
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              
              <!------------------------------------------------------------------------------->

            <?= $this->Form->create(@$pago, ['url' => ['action' => 'pagoCarrito']]); ?>

                <?= @$this->Form->hidden('id', ['label' => false, 'class'=> 'form-control', 'required', 'id' => 'p_id', 'readonly', 'required']); ?>
                
                <!--------------------------------------------------------------------------------------------------->
              
                <!--<div class="form-group">
                    <label for="formGroupExampleInput"> Banking entity </label>
                    <select required name="id_cuenta" class="form-control" id="banco">
                        <option disabled selected>--Select--</option>
                        <?php foreach ($cuentas as $key) { ?>
                          <option value="<?= $key['id'] ?>"> <?= ($key['numero_cuenta'] != '') ? "(TRASNF. DIRECTA) - " : "(PAGO MOVIL) - " ?> <?= $key['banco']?> </option>  
                        <?php }  ?>
                    </select>
                </div>


                <div class="row" id="t">
                  <div class="col-sm-8">
                  
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Account number </label>
                        <?= @$this->Form->input('numero_cuenta', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_numero_cuenta']); ?>
                    </div>

                  </div>
                  <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> RIF </label>
                        <?= @$this->Form->input('rif', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_rif']); ?>
                    </div>
                    
                  </div>

                  <div class="col-sm-6">
                  
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Headline </label>
                        <?= @$this->Form->input('titular', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_titular']); ?>
                    </div>

                  </div>
                  <div class="col-sm-3">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Email </label>
                        <?= @$this->Form->input('correo', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_correo']); ?>
                    </div>
                    
                  </div>
                  <div class="col-sm-3">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Account type </label>
                        <?= @$this->Form->input('tipo_cuenta', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_tipo_cuenta']); ?>
                    </div>
                    
                  </div>
                </div>





                <div class="row" id="pm">
                  <div class="col-sm-8">
                  
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Phone </label>
                        <?= @$this->Form->input('telefono', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_telefono']); ?>
                    </div>

                  </div>
                  <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> I.D </label>
                        <?= @$this->Form->input('identificacion', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_identificacion']); ?>
                    </div>
                    
                  </div>
                </div>

                <hr>-->

                <!--------------------------------------------------------------------------------------------------->

                <div class="row">
                  <div class="col-sm-6">

                    <div class="form-group">
                        <label for="formGroupExampleInput"> Total</label>
                        <?= @$this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'placeholder' => '0000.00', 'required', 'onKeyPress' => 'return soloNumPunto(event);', 'autocomplete' => 'off', 'id' =>  'p_monto', 'readonly']); ?>
                    </div>

                  </div>
                  <!--<div class="col-sm-3">

                    <div class="form-group">
                        <label for="formGroupExampleInput"> Monto Bs</label>
                        <?= @$this->Form->input('monto_bs', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'placeholder' => '0000.00', 'required', 'onKeyPress' => 'return soloNumPunto(event);', 'autocomplete' => 'off', 'id' =>  'p_monto_bs', 'readonly']); ?>
                    </div>

                  </div>
                  <div class="col-sm-6">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Reference </label>
                        <?= @$this->Form->input('referencia', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '000', 'required', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'maxlength' => 20, 'id' =>  'p_ref']); ?>
                    </div>

                  </div>-->
                  <div class="col-sm-6">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Date </label>
                        <input type="date" name="fecha_pago" class = 'form-control' id="p_fecha" disabled required max="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>"> 
                    </div>

                  </div>
                </div>
                
                
                <div class="form-group">
                    <label for="formGroupExampleInput"> Company name </label>
                    <?= @$this->Form->input('concepto', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'readonly', 'required', 'autocomplete' => 'off', 'rows' => 3, 'id' => 'p_compania']); ?>
                </div>

            



                <div class="form-group">
                    <label for="formGroupExampleInput">Address</label>
                    <?= @$this->Form->input('p_direccion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'readonly', 'required', 'autocomplete' => 'off', 'rows' => 3, 'id' => 'p_direccion']); ?>
                </div>

                <div class="orm-group">
  
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="text-transform: capitalize;" >Shipping Address</button>
  <div id="demo" class="collapse">

                <div class="form-group">
                    <label for="formGroupExampleInput">  Shipping Address </label>
                    <?= @$this->Form->input('direccion_envio', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'rows' => 3, 'id' => 'p_direccion']); ?>
                </div>
  </div>
</div>



                <hr>


            <!------------------------------------------------------------------------------->


            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="single_add_to_cart_button button alt" data-dismiss="modal" style="text-transform: capitalize;">Close</button>
              <button type="submit" class="single_add_to_cart_button button alt"  style="text-transform: capitalize;">Place order</button>
              <?= $this->Form->end(); ?>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">

              <?= $this->Form->create(@$pago, ['url' => ['action' => 'pagoCarritoD']]); ?>
              

              <?= @$this->Form->hidden('id', ['label' => false, 'class'=> 'form-control', 'required', 'id' => 'pe_id', 'readonly']); ?>
                
                <!--------------------------------------------------------------------------------------------------->
              


                <!--------------------------------------------------------------------------------------------------->

                <div class="row">
                  <div class="col-sm-5">

                    <div class="form-group">
                        <label for="formGroupExampleInput"> Total</label>
                        <?= @$this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'placeholder' => '0000.00', 'required', 'onKeyPress' => 'return soloNumPunto(event);', 'autocomplete' => 'off', 'id' =>  'p_montoe', 'readonly']); ?>
                    </div>

                  </div>
                  <!--<div class="col-sm-7">

                    <div class="form-group">
                        <label for="formGroupExampleInput"> Monto Bs</label>
                        <?= @$this->Form->input('monto_bs', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'placeholder' => '0000.00', 'required', 'onKeyPress' => 'return soloNumPunto(event);', 'autocomplete' => 'off', 'id' =>  'p_monto_bse', 'readonly']); ?>
                    </div>
                  </div>-->
              </div>
                  
              <hr>

              <div class="form-group">
                  <label for="formGroupExampleInput"> Company name </label>
                  <?= @$this->Form->input('descripcion_billete', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'rows' => 3, 'placeholder' => 'Indicate the number of tickets and their denomination', 'required', 'id' => 'p_compania']); ?>
              </div>
              
              <hr>

              <div class="form-group">
                  <label for="formGroupExampleInput"> Shipping Address </label>
                  <?= @$this->Form->input('direccion_envio', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'rows' => 3, 'id' => 'p_direccion']); ?>
              </div>


            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="single_add_to_cart_button button alt" data-dismiss="modal" style="text-transform: capitalize;">Close</button>
              <button type="submit" class="single_add_to_cart_button button alt" style="text-transform: capitalize;">Place order</button>
              <?= $this->Form->end(); ?>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->