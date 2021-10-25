<div class="modal fade" id="editar_subcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-mb" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #3c3c3c">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;"> Modify Subcategory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <?= $this->Form->create(@$actualizar, ['url' => ['action' => 'editarsub']]) ?>

              <input type="text" class="form-control" name="id" id="sub_id" readonly required hidden>

                <center> <h4>Category name</h4> </center>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Group</label>
                            <?= $this->Form->select('id_grupos', $grupos, ['required', 'empty' => '--Select--', 'id' => 'sub_id_grupos']); ?>
                          </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <?= @$this->Form->input('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'id' => 'sub_denominacion', 'placeholder' => 'Category name', 'autocomplete' => 'off']); ?>
                        </div>
                    </div>

            </div>
          </div>
        </div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill">To update</button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>