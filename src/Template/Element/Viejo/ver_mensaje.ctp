 <div class="modal fade" id="ver_mensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Mensaje del cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post" id="mensaje">
            <div class="modal-body">

               <?= @$this->Form->hidden('id', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'autocomplete' => 'off', 'readonly', 'id' => 'vm_id']); ?>


                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="formGroupExampleInput"> Mensaje </label>
                          <?= @$this->Form->textarea('mensaje', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'id' => 'vm_mensaje', 'readonly']); ?>
                      </div>
                  </div>

            </div>
              <?= $this->Form->end() ?>
          </form>
        </div>
      </div>
    </div>