<div class="modal fade" id="modificar_foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top: 15%">
          <!--<div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Modify Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>-->
          <?= $this->Form->create(@$nuevo_producto, ['type' => 'file', 'url' => ['action' => 'editarfoto']]) ?>
                <div class="modal-body">

                    <?= @$this->Form->hidden('id', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'autocomplete' => 'off', 'readonly', 'id' => 'pdf_id']); ?>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <input type="file" name="photo">
                        </div>
                    </div>
                    
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-info btn-fill">Actualizar</button>
              <?= $this->Form->end() ?>
            </div>
          </form>
        </div>
      </div>
    </div>