<div class="modal fade" id="modificar_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Modify Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <?= $this->Form->create(@$nuevo_producto, ['type' => 'file', 'url' => ['action' => 'editarproductos']]) ?>
                <div class="modal-body">

                    <?= @$this->Form->hidden('id', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'autocomplete' => 'off', 'readonly', 'id' => 'pd_id']); ?>


                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Group</label>
                            <?= $this->Form->select('id_grupo', $grupos, ['required', 'empty' => '--Select--', 'id' => 'pd_id_grupo']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Short description </label>
                            <?= @$this->Form->textarea('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Short description', 'required', 'autocomplete' => 'off', 'rows' => 2, 'id' => 'pd_denominacion']); ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Description </label>
                            <?= @$this->Form->textarea('descripcion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Descripcion', 'required', 'autocomplete' => 'off', 'rows' => 3, 'id' => 'pd_descripcion']); ?>
                        </div>
                    </div>


                    <div class="form-row" style="margin-bottom: 5px;">
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Product code </label>
                            <?= @$this->Form->input('codigo', ['type' => 'text', 'label' => false, 'placeholder' => 'Codigo de producto', 'autocomplete' => 'off', 'id' => 'pd_codigo']); ?>
                        </div>
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Price </label>
                            <?= @$this->Form->input('precio', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '0.00',  'autocomplete' => 'off', 'id' => 'FormatoGringo2']); ?>
                        </div>
                    </div>

                    
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-info btn-fill">To update</button>
              <?= $this->Form->end() ?>
            </div>
          </form>
        </div>
      </div>
    </div>