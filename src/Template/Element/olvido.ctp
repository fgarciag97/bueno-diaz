  <div class="modal fade" id="olvido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #92c354">
          <h5 class="modal-title" id="exampleModalLongTitle" style="color: white">Recover password</h5>
        </div>
        <div class="modal-body" style="background: #e3e3e3;">
            <?= $this->Form->create('Principal', ['type' => 'post', 'url' => ['controller' => 'Principal', 'action' => 'recuperar']]); ?>
                
              <div class="form-row">
              <!--  <div class="form-group col-md-2">
                  <label for="inputState">Tipo</label>

                  <select class="form-control" required name="letra">
                    <option disabled selected>--</option>
                    <option data-tokens="V" value="V"> V </option>
                    <option data-tokens="J" value="J"> J </option>
                    <option data-tokens="G" value="G"> G </option>
                    <option data-tokens="P" value="P"> P </option>
                  </select>

                </div>-->
                <div class="form-group col-md-10">
                  <label for="inputCity">E-mail</label>
                  <?= @$this->Form->input('correo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'placeholder' => 'E-mail', 'required', 'autocomplete' => 'off;']); ?>
                </div>
                <label for="inputState" style="text-align: center; font-family: monospace; width: 100%">"The new password will be sent to the email".</label>
              </div>
              
        </div>
        <div class="modal-footer" style="background: #e3e3e3;">
          <button type="button" class="single_add_to_cart_button button alt" data-dismiss="modal">close</button>
          <?= $this->Form->button('Recover', ['class'=>'single_add_to_cart_button button alt']); ?>
          <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>