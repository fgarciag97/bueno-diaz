<div class="modal fade" id="registrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #92c354">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">Account Info</h5>
                <hr>
            </div>
            <div class="modal-body" style="background: #e3e3e3;">
                
                <?= $this->Form->create('Principal', ['type' => 'post', 'url' => ['controller' => 'Principal', 'action' => 'registro']]); ?>

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
                      <!--<div class="form-group col-md-4">
                        <label for="inputCity"> ID</label>
                        <?= @$this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'placeholder' => 'ID', 'required', 'autocomplete' => 'off', 'maxlength' => 10]); ?>
                      </div>-->
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

                       <div class="form-group col-md-12">
                        <input type="checkbox" name="condiciones" id="checkbox2" value="1" required>
                        <label>I accept the <a href="files/privacypolicy.pdf" download="PrivacyPolicy.pdf" style="color: #0166d0"> Privacy Policy </a> and <a href="files/Conditions.pdf" download="TermsAndConditions.pdf" style="color: #0166d0"> Terms And Conditions </a> of Bueno & Diaz Services Corp.</label>
                      </div>

                  <!--

                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="formGroupExampleInput"> Password </label>
                          <?= @$this->Form->input('password', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="formGroupExampleInput"> e-mail </label>
                          <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'e-mail', 'required', 'autocomplete' => 'off']); ?>
                      </div>

                      <div class="form-group col-md-3">
                          <label for="formGroupExampleInput"> Cellphone number </label>
                          <?= @$this->Form->input('movil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Cellphone number', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'maxlength' => 11]); ?>
                      </div>

                      <div class="form-group col-md-3">
                          <label for="formGroupExampleInput"> House-phone number </label>
                          <?= @$this->Form->input('fijo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'House-phone number', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'maxlength' => 11]); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="formGroupExampleInput"> address </label>
                          <?= @$this->Form->textarea('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'address', 'required', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>-->

            </div>
            <div class="modal-footer" style="background: #e3e3e3;">
                <button type="button" class="single_add_to_cart_button button alt" data-dismiss="modal" style="text-transform: capitalize">Close</button>
                <button type="submit" class="single_add_to_cart_button button alt" style="text-transform: capitalize">Sign In</button>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>