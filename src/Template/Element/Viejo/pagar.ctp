<!-- modal de registrar transaccion-->
    <div class="modal fade" id="pagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Registrar Transacción</h5>
          </div>
          <div class="modal-body">
                <?= $this->Form->create(@$pago, ['url' => ['action' => 'pagoCarrito']]); ?>

                  <?= @$this->Form->hidden('id', ['label' => false, 'class'=> 'form-control', 'required', 'id' => 'p_id', 'readonly', 'required']); ?>
                
                <!--------------------------------------------------------------------------------------------------->
              
                <div class="form-group">
                    <label for="formGroupExampleInput"> Entidad Bancaria </label>
                    <select required name="id_cuenta" class="form-control" id="banco">
                        <option disabled selected>--Seleccione--</option>
                        <?php foreach ($cuentas as $key) { ?>
                          <option value="<?= $key['id'] ?>"> <?= ($key['numero_cuenta'] != '') ? "(TRASNF. DIRECTA) - " : "(PAGO MOVIL) - " ?> <?= $key['banco']?> </option>  
                        <?php }  ?>
                    </select>
                </div>


                <div class="row" id="t">
                  <div class="col-sm-8">
                  
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Numero de Cuenta </label>
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
                        <label for="formGroupExampleInput"> Titular </label>
                        <?= @$this->Form->input('titular', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_titular']); ?>
                    </div>

                  </div>
                  <div class="col-sm-3">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Correo </label>
                        <?= @$this->Form->input('correo', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_correo']); ?>
                    </div>
                    
                  </div>
                  <div class="col-sm-3">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Tipo Cuenta </label>
                        <?= @$this->Form->input('tipo_cuenta', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_tipo_cuenta']); ?>
                    </div>
                    
                  </div>
                </div>





                 <div class="row" id="pm">
                  <div class="col-sm-8">
                  
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Telefono </label>
                        <?= @$this->Form->input('telefono', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_telefono']); ?>
                    </div>

                  </div>
                  <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput"> Identificacion </label>
                        <?= @$this->Form->input('identificacion', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'p_identificacion']); ?>
                    </div>
                    
                  </div>
                </div>

                <hr>

                <!--------------------------------------------------------------------------------------------------->

                  <div class="row">
                    <div class="col-sm-4">

                      <div class="form-group">
                          <label for="formGroupExampleInput"> Monto a Pagar</label>
                          <?= @$this->Form->input('monto', ['type' => 'text', 'label' => false, 'class'=> 'moneda form-control', 'placeholder' => '0000.00', 'required', 'onkeyup' => 'mayus(this);', 'onKeyPress' => 'return soloNumPunto(event);', 'autocomplete' => 'off', 'id' =>  'p_monto', 'readonly']); ?>
                      </div>

                    </div>
                    <div class="col-sm-4">
                     
                      <div class="form-group">
                          <label for="formGroupExampleInput"> Referencia </label>
                          <?= @$this->Form->input('referencia', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Referencia de la transacción', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'maxlength' => 20]); ?>
                      </div>

                    </div>
                    <div class="col-sm-4">
                     
                      <div class="form-group">
                          <label for="formGroupExampleInput"> Fecha </label>
                          <input type="date" name="fecha_pago" class = 'form-control' required max="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>"> 
                      </div>

                    </div>
                  </div>
                
                
                <div class="form-group">
                    <label for="formGroupExampleInput"> Concepto del Pago </label>
                    <?= @$this->Form->input('concepto', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'rows' => 3, 'onkeyup' => 'mayus(this);']); ?>
                </div>

                <hr>

                <div class="form-group">
                    <label for="formGroupExampleInput"> Dirección de envio </label>
                    <?= @$this->Form->input('direccion_envio', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'rows' => 3, 'onkeyup' => 'mayus(this);']); ?>
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-info btn-fill">Registrar</button>
            <?= $this->Form->end(); ?>
          </div>
        </div>
      </div>
    </div>