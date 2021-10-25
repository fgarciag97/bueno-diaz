<div class="modal fade" id="detalles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Detalles del Pago</h5>
                <hr>
            </div>
            <form action="" method="post" id="grupos">
                <div class="modal-body" style="background: #e3e3e3;">

                    <fieldset>
                         <div class="form-group">
                            <label for="formGroupExampleInput"> Entidad Bancaria </label>
                            <?= @$this->Form->input('banco', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_banco']); ?>
                        </div>


                        <div class="row" id="trasnf">
                          <div class="col-sm-8">
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Numero de Cuenta </label>
                                <?= @$this->Form->input('numero_cuenta', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_numero_cuenta']); ?>
                            </div>

                          </div>
                          <div class="col-sm-4">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> RIF </label>
                                <?= @$this->Form->input('rif', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_identificacion']); ?>
                            </div>
                            
                          </div>

                          <div class="col-sm-6">
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Titular </label>
                                <?= @$this->Form->input('titular', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_titular']); ?>
                            </div>

                          </div>
                          <div class="col-sm-3">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Correo </label>
                                <?= @$this->Form->input('correo', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_correo']); ?>
                            </div>
                            
                          </div>
                          <div class="col-sm-3">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Tipo Cuenta </label>
                                <?= @$this->Form->input('tipo_cuenta', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_tipo_cuenta']); ?>
                            </div>
                            
                          </div>
                        </div>





                         <div class="row"  id="pmov">
                            <div class="col-sm-4">
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Tipo </label>
                                <?= @$this->Form->input('telefono', ['label' => false, 'class'=> 'form-control', 'readonly', 'value' => 'PAGO MOVIL']); ?>
                            </div>

                          </div>
                          <div class="col-sm-4">
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Telefono </label>
                                <?= @$this->Form->input('telefono', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_telefono']); ?>
                            </div>

                          </div>
                          <div class="col-sm-4">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Identificacion </label>
                                <?= @$this->Form->input('identificacion', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'd_identificacion2']); ?>
                            </div>
                            
                          </div>
                        </div>

                        <hr>

                        <!--------------------------------------------------------------------------------------------------->

                          <div class="row">
                            <div class="col-sm-4">

                              <div class="form-group">
                                  <label for="formGroupExampleInput"> Monto a Pagar</label>
                                  <?= @$this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'id' => 'd_monto_a_pagar', 'readonly']); ?>
                              </div>

                            </div>
                            <div class="col-sm-4">
                             
                              <div class="form-group">
                                  <label for="formGroupExampleInput"> Referencia </label>
                                  <?= @$this->Form->input('referencia', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'id' => 'd_referencia', 'readonly']); ?>
                              </div>

                            </div>
                            <div class="col-sm-4">
                             
                              <div class="form-group">
                                  <label for="formGroupExampleInput"> Fecha </label>
                                  <input type="date" name="fecha_pago" class = 'form-control' required  id="d_fecha_pago" readonly> 
                              </div>

                            </div>
                          </div>
                        
                        
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Concepto del Pago </label>
                            <?= @$this->Form->input('concepto', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'id' => 'd_concepto', 'readonly', 'rows' => 2]); ?>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="formGroupExampleInput"> Dirección de envio </label>
                            <?= @$this->Form->input('direccion_envio', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'rows' => 3, 'id' => 'd_direccion_envio', 'readonly']); ?>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                  <?= $this->Form->end() ?>
                </div>
            </form>
        </div>
    </div>
</div>