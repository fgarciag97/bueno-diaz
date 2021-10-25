<div class="modal fade" id="agregar_cuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #3c3c3c">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Add Bank Account</strong></h5>
                <hr>
            </div>
            <div class="modal-body">

                <?= $this->Form->create(@$nueva_cuenta) ?>

                    <center> <h4>Account data</h4> </center>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Banking entity</label>
                            <?= $this->Form->select('banco', $bancos, ['required', 'empty' => '--Select--']); ?>
                        </div>
                      
                    </div>

                    <hr>
                    <center> <h5>Direct Transfer</h5> </center>
                    <hr>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity"> Account number</label>
                            <?= @$this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'maxlength' => 20,'autocomplete' => 'off']); ?>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputCity"> Account type</label>
                            <?= $this->Form->select('tipo_cuenta', ['AHORRO' => 'AHORRO', 'CORRIENTE' => 'CORRIENTE'], ['empty' => '--Select--']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Headline </label>
                            <?= @$this->Form->input('responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off']); ?>
                        </div>
                    </div>

                    <hr>
                    <center> <h5>Mobile payment</h5> </center>
                    <hr>

                    <div class="form-row" style="margin-bottom: 5px;">

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Identification card </label>
                            <?= @$this->Form->input('cedula', ['type' => 'cedula', 'label' => false, 'class'=> 'form-control',  'required', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
                        </div>

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Email </label>
                            <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control',  'required', 'autocomplete' => 'off']); ?>
                        </div>

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Phone </label>
                            <?= @$this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info btn-fill">Add</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
