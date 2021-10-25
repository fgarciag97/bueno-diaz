<div class="modal fade" id="ver_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Customer Details</h5>
                <hr>
            </div>
            <form action="" method="post" id="grupos">
                <div class="modal-body" style="background: #e3e3e3;">

                    <fieldset>

                        <div class="row">
                          <div class="col-sm-6">
                          
                            <div class="form-group">
                              <label for="formGroupExampleInput"> Name </label>
                              <?= @$this->Form->input('cliente', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_nombres']); ?>
                            </div>

                         </div>
                         <div class="col-sm-6">
                          
                            <div class="form-group">
                              <label for="formGroupExampleInput"> Last name </label>
                              <?= @$this->Form->input('cliente', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_apellidos']); ?>
                            </div>

                         </div>

                          <div class="col-sm-12">
                          
                            <div class="form-group">
                              <label for="formGroupExampleInput"> Company </label>
                              <?= @$this->Form->input('Company', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_compania']); ?>
                            </div>

                          </div>
                          <div class="col-sm-9">
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Email </label>
                                <?= @$this->Form->input('correo', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_correo']); ?>
                            </div>

                          </div>
                          <div class="col-sm-3">
                           
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Phone </label>
                                <?= @$this->Form->input('movil', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_movil']); ?>
                            </div>
                            
                          </div> 
                        <div class="col-sm-12">
                          
                            <div class="form-group">
                              <label for="formGroupExampleInput"> Shipping address </label>
                              <?= @$this->Form->textarea('direccion', ['label' => false, 'class'=> 'form-control', 'readonly', 'id' => 'c_usuario_direccion2', 'rows' => '2']); ?>
                            </div>

                          </div>

                    </fieldset>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
                  <?= $this->Form->end() ?>
                </div>
            </form>
        </div>
    </div>
</div>