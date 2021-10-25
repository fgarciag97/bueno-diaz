<div class="modal fade" id="agregar_clientes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Registro de Cliente</strong></h5>
                <hr>
            </div>
            <div class="modal-body">

                <?= $this->Form->create(@$nuevo_empresa) ?>

                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="inputCity"> Cedula</label>
                        <?= @$this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'placeholder' => '', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'maxlength' => 8]); ?>
                      </div>
                      <div class="form-group col-md-8">
                        <label for="formGroupExampleInput"> Nombres y Apellidos </label>
                        <?= @$this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="formGroupExampleInput"> Contraseña </label>
                          <?= @$this->Form->input('password', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'placeholder' => '', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="formGroupExampleInput"> Correo </label>
                          <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Correo', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                      </div>

                      <div class="form-group col-md-3">
                          <label for="formGroupExampleInput"> Numero Movil </label>
                          <?= @$this->Form->input('movil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Movil', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'maxlength' => 11]); ?>
                      </div>

                      <div class="form-group col-md-3">
                          <label for="formGroupExampleInput"> Numero Fijo </label>
                          <?= @$this->Form->input('fijo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Fijo', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'maxlength' => 11]); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <?= $this->Form->select('id_municipio', @$municipios, ['required', 'empty' => '--Seleccione Municipio--', 'id' => 'id_municipio']); ?>
                      </div>

                      <div class="form-group col-md-6">
                          <?= $this->Form->select('id_parroquia', @$parroquias, ['required', 'empty' => '--Seleccione Parroquia--', 'id' => 'id_parroquia']); ?>
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="formGroupExampleInput"> Domicilio </label>
                          <?= @$this->Form->textarea('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
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
