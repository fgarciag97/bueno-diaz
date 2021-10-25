<div class="modal fade" id="agregar_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="padding-right: 0"> 
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #4e73df">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;"> Customer Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #e3e3e3;">

        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <?= $this->Form->create(@$admin, ['type' => 'post']) ?>

                <!--<div class="form-group row">
                  <div class="col-sm-2 mb-3 mb-sm-0">
                    <label>Tipo</label>
                    <select class="form-control" name="letra" required>
                      <option disabled>Tipo</option>
                      <option value="V">V</option>
                      <option value="J">J</option>
                      <option value="E">E</option>
                      <option value="G">G</option>
                      <option value="P">P</option>
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <label>Identification Card</label>
                    <input type="text" class="form-control" name="cedula" placeholder="Identification Card" onKeyPress='return soloNum(event);' autocomplete="off" required>
                  </div>
                  <div class="col-sm-6">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="nombres" placeholder="Full Name" autocomplete="off" required>
                  </div>
                </div>

                <hr>

                <div class="form-group row">
                  <div class="col-sm-7">
                    <label>Email</label>
                    <input type="email" class="form-control" name="correo" placeholder="Email" autocomplete="off" required>
                  </div>
                  <div class="col-sm-5">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="movil" placeholder="Phone" onKeyPress='return soloNum(event);' autocomplete="off" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" onkeyup='mayus(this);' autocomplete="off" required>
                  </div>
                </div>

                <hr>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <label>Direction</label>
                    <textarea type="textarea" class="form-control" name="direccion" placeholder="Direction" autocomplete="off" required></textarea>
                  </div>
                </div>
                  -->

                  <div class="form-row">
                       <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Email </label>
                        <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Email', 'required', 'autocomplete' => 'off']); ?>
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
                        <?= @$this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'First name', 'required', 'autocomplete' => 'off']); ?>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="formGroupExampleInput"> Last Name </label>
                        <?= @$this->Form->input('apellidos', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Last Name', 'required', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-6">
                        <label for="formGroupExampleInput"> Address </label>
                        <?= @$this->Form->input('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Address', 'required', 'autocomplete' => 'off']); ?>
                      </div>

                      <div class="form-group col-md-2">
                        <label for="formGroupExampleInput"> City </label>
                        <?= @$this->Form->input('city', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'City', 'required', 'autocomplete' => 'off']); ?>
                      </div>

                       <div class="form-group col-md-2">
                        <label for="formGroupExampleInput"> State </label>
                        <?= @$this->Form->input('state', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'State', 'required', 'autocomplete' => 'off']); ?>
                      </div>

                       <div class="form-group col-md-2">
                        <label for="formGroupExampleInput"> Zip Code </label>
                        <?= @$this->Form->input('code', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Zip Code', 'required', 'autocomplete' => 'off', 'onKeyPress' => 'return soloNum(event);']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Cell Phone </label>
                        <?= @$this->Form->input('movil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Cell Phone', 'required', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
                      </div>

                      <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Phone </label>
                        <?= @$this->Form->input('movil2', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Phone', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
                      </div>

                       <div class="form-group col-md-4">
                        <label for="formGroupExampleInput"> Fax </label>
                        <?= @$this->Form->input('fijo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Fax', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-12">
                        <label for="formGroupExampleInput"> Company </label>
                        <?= @$this->Form->input('company', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Company', 'required', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                       <div class="form-group col-md-12">
                        <label for="formGroupExampleInput"> Job Descriptions </label>
                        <?= @$this->Form->textarea('nota', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Job Descriptions', 'required', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>

            </div>
          </div>
        </div>
                
      </div>
      <div class="modal-footer" style="background: #e3e3e3;">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill">Add</button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>

