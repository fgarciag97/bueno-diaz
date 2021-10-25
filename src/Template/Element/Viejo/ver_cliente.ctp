<div class="modal fade" id="ver_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Detalles del Cliente</h5>
                <hr>
            </div>
            <form action="" method="post" id="grupos">
                <div class="modal-body" style="background: #e3e3e3;">

                    <fieldset>

                        <div class="row">
                          <div class="col-sm-9">
                          
                            <div class="form-group">
                              <label for="formGroupExampleInput"> Cliente </label>
                              <?= @$this->Form->input('cliente', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_nombres']); ?>
                            </div>

                          </div>
                          <div class="col-sm-3">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Cedula </label>
                                <?= @$this->Form->input('cedula', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_cedula']); ?>
                            </div>
                            
                          </div>

                          <div class="col-sm-6">
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Correo </label>
                                <?= @$this->Form->input('correo', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_correo']); ?>
                            </div>

                          </div>
                          <div class="col-sm-3">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Movil </label>
                                <?= @$this->Form->input('movil', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_movil']); ?>
                            </div>
                            
                          </div>
                          <div class="col-sm-3">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Fijo </label>
                                <?= @$this->Form->input('fijo', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_fijo']); ?>
                            </div>
                            
                          </div>
                        </div>

                    </fieldset>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                  <?= $this->Form->end() ?>
                </div>
            </form>
        </div>
    </div>
</div>