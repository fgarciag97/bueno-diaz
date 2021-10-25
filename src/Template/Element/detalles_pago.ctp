<div class="modal fade" id="detalles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Print Order</h5>
                <hr>
            </div>
            <form action="" method="post" id="grupos">
                <div class="modal-body" style="background: #e3e3e3;">

                    <!-- <fieldset>

                          <div class="row">
                            <div class="col-sm-6">

                              <div class="form-group">
                                  <label for="formGroupExampleInput"> Total</label>
                                  <?= @$this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'id' => 'd_monto_a_pagar', 'readonly']); ?>
                              </div>

                            </div>
                            <div class="col-sm-6">
                             
                              <div class="form-group">
                                  <label for="formGroupExampleInput"> Date </label>
                                  <input type="date" class = 'form-control' required  id="d_fecha_pago" readonly> 
                              </div>

                            </div>
                          </div>
                        
                        
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Company name </label>
                            <?= @$this->Form->input('concepto', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'id' => 'd_concepto', 'readonly', 'rows' => 2]); ?>
                        </div>
                        <div class="form-group">
                                  <label for="formGroupExampleInput"> Code</label>
                                  <?= @$this->Form->input('code', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'id' => 'd_code', 'readonly']); ?>
                              </div>

                               <div class="form-group">
                                  <label for="formGroupExampleInput"> State</label>
                                  <?= @$this->Form->input('state', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'id' => 'd_state', 'readonly']); ?>
                              </div>

                         <div class="form-group">
                            <label for="formGroupExampleInput"> Adress </label>
                            <?= @$this->Form->input('direccion', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'id' => 'd_direccion', 'readonly', 'rows' => 2]); ?>
                        </div>



                        <hr>

                        <div class="form-group">
                            <label for="formGroupExampleInput"> Shipping Address </label>
                           <?= @$this->Form->input('direccion_envio', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'id' => 'd_direccion_envio', 'readonly', 'rows' => 2]); ?>
                        </div>
                    </fieldset> -->





                    <br>


                    <fieldset>


                        <div class="row">

                          <div class="col-xl-6">
                              <strong>First Name</strong>
                              <p> <div id='c_usuario_nombres2'></div> </p>
                          </div>
                          <div class="col-xl-6">
                              <strong>Last Name</strong>
                              <p> <div id='c_usuario_apellidos2'></div> </p>
                          </div>

                          <div class="col-xl-6">
                              <strong>Company</strong>
                              <p> <div id='c_usuario_compania2'></div> </p>
                          </div>
                          <div class="col-xl-6">
                              <strong>Email</strong>
                              <p> <div id='c_usuario_correo2'></div> </p>
                          </div>

                          <div class="col-xl-6">
                              <strong>Phone</strong>
                              <p> <div id='c_usuario_movil2'></div> </p>
                          </div>
                          <div class="col-xl-6">
                              <strong>Shipping address</strong>
                              <p> <div id='c_usuario_direccion22'></div> </p>
                          </div>

                        </div>

                    </fieldset>


                    <hr>
                     <div id="prod2"></div>
                    <hr>


                    <center>
                        <a href="#" class="btn btn-out btn-info btn-square" id="url">Print voucher</a>
                    </center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
                  <?= $this->Form->end() ?>
                </div>
            </form>
        </div>
    </div>
</div>