

    <div class="modal fade" id="modificar_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Modificar Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post" id="cliente">
            <div class="modal-body">

               <?= @$this->Form->hidden('id', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'autocomplete' => 'off', 'readonly', 'id' => 'c_id']); ?>

                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity"> Cedula</label>
                        <?= @$this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'placeholder' => '', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'maxlength' => 8, 'id' => 'c_cedula', 'readonly']); ?>
                      </div>
                      <div class="form-group col-md-8">
                        <label for="formGroupExampleInput"> Nombres y Apellidos </label>
                        <?= @$this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'id' => 'c_nombres']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="formGroupExampleInput"> Contraseña </label>
                          <?= @$this->Form->input('password', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'placeholder' => '', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'id' => 'c_password']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="formGroupExampleInput"> Correo </label>
                          <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Correo', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'id' => 'c_correo']); ?>
                      </div>

                      <div class="form-group col-md-3">
                          <label for="formGroupExampleInput"> Numero Movil </label>
                          <?= @$this->Form->input('movil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Movil', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'maxlength' => 11, 'id' => 'c_movil']); ?>
                      </div>

                      <div class="form-group col-md-3">
                          <label for="formGroupExampleInput"> Numero Fijo </label>
                          <?= @$this->Form->input('fijo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Fijo', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'maxlength' => 11, 'id' => 'c_fijo']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="formGroupExampleInput"> Domicilio </label>
                          <?= @$this->Form->textarea('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'id' => 'c_direccion']); ?>
                      </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-info btn-fill">Modificar</button>
              <?= $this->Form->end() ?>
            </div>
          </form>
        </div>
      </div>
    </div>