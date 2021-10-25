<div class="modal fade" id="modificar_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #4e73df">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;"> Modify customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #e3e3e3;">

        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <?= $this->Form->create(@$login, ['url' => ['action' => 'editc']]) ?>

              <input type="text" class="form-control" name="id" id="m_c_id" readonly required hidden>
              <input type="text" class="form-control" name="privilegio" id="m_c_privilegio" readonly required hidden>

                <div class="form-row">
                       <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Email </label>
                        <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Email', 'required', 'autocomplete' => 'off', 'id' => 'm_c_correo']); ?>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Password </label>
                        <?= @$this->Form->input('password', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off', 'id' => 'password', 'onkeyup' => 'mayus(this);']); ?>
                      </div>

                       <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Confirm Password </label>
                        <?= @$this->Form->input('password2', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Confirm Password', 'required', 'autocomplete' => 'off', 'id' => 'password2', 'onkeyup' => 'mayus(this); verificarpassword()']); ?>
                        <label for="formGroupExampleInput" style="color: red; font-size: 15px; display: none" id="validatepass"> Passwords don't match </label>
                      </div>
                  </div>

                  <hr>

                      
                  <div class="form-row">
                       <div class="form-group col-md-6">
                        <label for="formGroupExampleInput"> First name </label>
                        <?= @$this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'First name', 'required', 'autocomplete' => 'off', 'id' => 'm_c_nombres']); ?>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="formGroupExampleInput"> Last Name </label>
                        <?= @$this->Form->input('apellidos', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Last Name', 'required', 'autocomplete' => 'off', 'id' => 'm_c_apellidos']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-6">
                        <label for="formGroupExampleInput"> Address </label>
                        <?= @$this->Form->input('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Address', 'required', 'autocomplete' => 'off', 'id' => 'm_c_direccion']); ?>
                      </div>

                      <div class="form-group col-md-2">
                        <label for="formGroupExampleInput"> City </label>
                        <?= @$this->Form->input('city', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'City', 'required', 'autocomplete' => 'off', 'id' => 'm_c_city']); ?>
                      </div>

                       <div class="form-group col-md-2">
                        <label for="formGroupExampleInput"> State </label>
                        <?= @$this->Form->input('state', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'State', 'required', 'autocomplete' => 'off', 'id' => 'm_c_state']); ?>
                      </div>

                       <div class="form-group col-md-2">
                        <label for="formGroupExampleInput"> Zip Code </label>
                        <?= @$this->Form->input('code', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Zip Code', 'required', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);', 'id' => 'm_c_code']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Cell Phone </label>
                        <?= @$this->Form->input('movil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Cell Phone', 'required', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'id' => 'm_c_movil']); ?>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Phone </label>
                        <?= @$this->Form->input('movil2', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Phone', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'id' => 'm_c_movil2']); ?>
                      </div>

                       <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Fax </label>
                        <?= @$this->Form->input('fijo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Fax', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'id' => 'm_c_fijo']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-12">
                        <label for="formGroupExampleInput"> Company </label>
                        <?= @$this->Form->input('company', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Company', 'required', 'autocomplete' => 'off', 'id' => 'm_c_company']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-12">
                        <label for="formGroupExampleInput"> Job Descriptions </label>
                        <?= @$this->Form->textarea('nota', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Job Descriptions', 'required', 'autocomplete' => 'off', 'id' => 'm_c_nota']); ?>
                      </div>
                  </div>

            </div>
          </div>
        </div>
                
      </div>
      <div class="modal-footer" style="background: #e3e3e3;">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill">To update</button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>

