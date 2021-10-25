<div class="modal fade" id="agregar_cuentas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Agregar Cuenta Bancaria</strong></h5>
                <hr>
            </div>
            <div class="modal-body">

                <?= $this->Form->create(@$nueva_cuenta) ?>

                    <center> <h4>Datos de la Cuenta</h4> </center>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Entidad Bancaria</label>
                            <?= $this->Form->select('banco', $bancos, ['required', 'empty' => '--Seleccione--']); ?>
                        </div>
                      
                    </div>

                    <hr>
                    <center> <h5>Transferencia Directa</h5> </center>
                    <hr>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity"> Numero Cuenta</label>
                            <?= @$this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'maxlength' => 20,'autocomplete' => 'off']); ?>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputCity"> Tipo Cuenta</label>
                            <?= $this->Form->select('tipo_cuenta', ['AHORRO' => 'AHORRO', 'CORRIENTE' => 'CORRIENTE'], ['empty' => '--Seleccione--']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Titular </label>
                            <?= @$this->Form->input('responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
                        </div>
                    </div>

                    <hr>
                    <center> <h5>Pago movil</h5> </center>
                    <hr>

                    <div class="form-row" style="margin-bottom: 5px;">

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Cedula </label>
                            <?= @$this->Form->input('cedula', ['type' => 'cedula', 'label' => false, 'class'=> 'form-control',  'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
                        </div>

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Correo </label>
                            <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control',  'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                        </div>

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Telefono </label>
                            <?= @$this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-info btn-fill">Agregar</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
