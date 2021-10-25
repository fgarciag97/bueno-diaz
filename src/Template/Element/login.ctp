<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #92c354">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;font-size: 28px;">Sign in</h5>
      </div>
      <div class="modal-body" style="background: #e3e3e3;">

        <div class="row">
          <div class="col-lg-12">
            <div class="p-6">
              <?= $this->Form->create(@$login, ['url' => ['controller' => 'principal', 'action' => 'login']], ['id'=>"form_login", 'class' => 'user',  "autocomplete"=>"off"]) ?>

                <div class="form-group row">
                 <!-- <div class="col-sm-2 mb-3 mb-sm-0">
                    <label>Tipo</label>
                    <select class="form-control" name="letra" required>
                      <option disabled>Tipo</option>
                      <option value selected="V">V</option>
                      <option value="J">J</option>
                      <option value="E">E</option>
                      <option value="G">G</option>
                      <option value="P">P</option> 
                    </select>
                  </div>-->
                  <div class="col-sm-4">
                     <label style="font-size: 20px">Email</label>
                    <input type="email" class="form-control" name="correo" placeholder="Email" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                  </div>
                  <div class="col-sm-6">
                     <label style="font-size: 20px" >Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" onkeyup='mayus(this);' required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');">
                  </div>
                </div>


                <!--<div class="form-group col-md-12">
                  <input type="checkbox" id="checkbox2">
                  <label>Extend session time</label>
                </div>-->

                 <a href="#" data-toggle='modal' data-target='#olvido' style="color: black; font-weight: 800"> Forgot your password? </a>
            </div>
          </div>
        </div>
                
      </div>
      <div class="modal-footer" style="background: #e3e3e3;">
        <button type="button" class="single_add_to_cart_button button alt" data-dismiss="modal" style="text-transform: capitalize;">Close</button>
        <button type="submit" class="single_add_to_cart_button button alt"style="text-transform: capitalize;">Log in</button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>