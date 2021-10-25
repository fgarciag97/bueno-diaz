<div class="modal fade" id="ver_direccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Dirección de Envio</h5>
                <hr>
            </div>
            <form action="" method="post" id="grupos">
                <div class="modal-body" style="background: #e3e3e3;">

                    <fieldset>

                        <div class="row">
                          <div class="col-sm-12">
                          
                            <div class="form-group">
                              <?= @$this->Form->textarea('direccion', ['label' => false, 'class'=> 'form-control', 'id' => 'direccion', 'readonly']); ?>
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