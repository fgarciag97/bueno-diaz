<div class="modal fade" id="agregar_bancos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-mb" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #3c3c3c">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Add Banks</strong></h5>
                <hr>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="p-5">

                        <?= $this->Form->create(@$agregar) ?>

                            <center> <h4>Name of the bank</h4> </center>

                            <div class="form-row">
                                <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                    <?= @$this->Form->input('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Name of the bank', 'autocomplete' => 'off']); ?>
                                    
                                </div>
                                
                                      <div class="form-group col-md-12" style="margin-bottom: 5px;">
                                <?= @$this->Form->input('url', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Url://', 'autocomplete' => 'off']); ?>
                                </div>
                                </div>
                           
                    </div>
                  </div>
                </div>

            </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info btn-fill">Add</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
