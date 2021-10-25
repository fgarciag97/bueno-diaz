<div class="modal fade" id="agregar_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Add Product</strong></h5>
                <hr>
            </div>
            <div class="modal-body">

                <?= $this->Form->create(@$nuevo_producto, ['type' => 'file']) ?>

                    <center> <h4>Product</h4> </center>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Category</label>
                            <?= $this->Form->select('id_grupo', $grupos, ['required', 'empty' => '--Select--', 'id' => 'cat1']); ?>
                          </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Sub-Category</label>
                            <?= $this->Form->select('id_subcategoria', @$x, ['required', 'empty' => '--Select--', 'id' => 'subcat1']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Short description </label>
                            <?= @$this->Form->textarea('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Short description', 'required', 'autocomplete' => 'off',  'rows' => 2]); ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Description </label>
                            <?= @$this->Form->textarea('descripcion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Description', 'required', 'autocomplete' => 'off', 'rows' => 3]); ?>
                        </div>
                    </div>


                    <div class="form-row" style="margin-bottom: 5px;">
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Product code </label>
                            <?= @$this->Form->input('codigo', ['type' => 'text', 'label' => false, 'placeholder' => 'Product code', 'autocomplete' => 'off']); ?>
                        </div>
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Price</label>
                            <?= @$this->Form->input('precio', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => '0.00', 'autocomplete' => 'off', 'id' => 'FormatoGringo']); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Image </label>
                            <?= @$this->Form->input('photo', ['type' => 'file', 'label' => false, 'required']); ?>
                        </div>
                    </div>

                    <center style="color: red">
                          Images must be in size. 200x200px
                      </center>
                </div>


      

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info btn-fill">Add</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
