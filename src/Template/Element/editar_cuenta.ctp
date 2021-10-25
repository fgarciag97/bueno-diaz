<div class="modal fade" id="editar_cuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #3c3c3c">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;"> Modify Bank Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <?= $this->Form->create(@$login, ['url' => ['action' => 'editar']]) ?>

              <input type="text" class="form-control" name="id" id="c_id" readonly required hidden>

                <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Account data</label>
                            <?= $this->Form->select('banco', $bancos, ['required', 'empty' => '--Select--', 'id' => 'c_banco']); ?>
                        </div>
                      
                    </div>

                    <hr>
                    <center> <h5>Direct Transfer</h5> </center>
                    <hr>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity"> Account number</label>
                            <?= @$this->Form->input('numero_cuenta', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'onKeyPress' => 'return soloNum(event);', 'maxlength' => 20,'autocomplete' => 'off', 'id' => 'c_numero_cuenta']); ?>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputCity"> Account type</label>
                            <?= $this->Form->select('tipo_cuenta', ['AHORRO' => 'AHORRO', 'CORRIENTE' => 'CORRIENTE'], ['empty' => '--Seleccione--', 'id' => 'c_tipo_cuenta']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Headline </label>
                            <?= @$this->Form->input('responsable', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autocomplete' => 'off', 'id' => 'c_responsable']); ?>
                        </div>
                    </div>

                    <hr>
                    <center> <h5>Mobile payment</h5> </center>
                    <hr>

                    <div class="form-row" style="margin-bottom: 5px;">

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Identification card </label>
                            <?= @$this->Form->input('cedula', ['type' => 'cedula', 'label' => false, 'class'=> 'form-control',  'required', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'id' => 'c_cedula']); ?>
                        </div>

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Email </label>
                            <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control',  'required',  'autocomplete' => 'off', 'id' => 'c_correo']); ?>
                        </div>

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Phone </label>
                            <?= @$this->Form->input('telefono', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'id' => 'c_telefono']); ?>
                        </div>
                    </div>

            </div>
          </div>
        </div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill">To update</button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>