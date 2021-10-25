

    <div class="modal fade" id="modificar_empresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Modificar Empresa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post" id="empresa">
            <div class="modal-body">
               <center> <h4>Datos de la Empresa</h4> </center>

               <?= @$this->Form->hidden('id', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'autocomplete' => 'off', 'readonly', 'id' => 'e_id']); ?>

                    <div class="form-row">
                      
                        <div class="form-group col-md-5" style="margin-bottom: 5px;">
                            <label for="inputCity"> Identificación</label>
                            <?= @$this->Form->input('x', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'autocomplete' => 'off', 'readonly', 'id' => 'e_identificacion']); ?>
                        </div>

                        <div class="form-group col-md-7" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Razon Social </label>
                            <?= @$this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Razon Social',  'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'required', 'readonly', 'id' => 'e_nombres']); ?>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Dirección </label>
                            <?= @$this->Form->textarea('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Direccion', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 3, 'id' => 'e_direccion']); ?>
                        </div>
                    </div>

                    <div class="form-row" style="margin-bottom: 5px;">
                        <div class="form-group col-md-6" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Correo </label>
                            <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Correo', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'id' => 'e_correo']); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Clave </label>
                            <?= @$this->Form->input('password', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Clave', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'id' => 'e_password']); ?>
                        </div>

                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Numero Movil </label>
                            <?= @$this->Form->input('movil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Movil', 'required', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'id' => 'e_movil']); ?>
                        </div>


                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Numero Fijo </label>
                            <?= @$this->Form->input('fijo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Fijo', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'id' => 'e_fijo']); ?>
                        </div>
                    </div>

                    <div class="form-row" style="margin-bottom: 5%;">
                        <div class="form-group col-md-12" style="margin-bottom: 5%;">
                            <label for="formGroupExampleInput"> Perfil de la Empresa </label>
                            <?= @$this->Form->textarea('nota', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Perfil', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 3, 'id' => 'e_nota']); ?>
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