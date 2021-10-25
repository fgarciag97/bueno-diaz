<div class="modal fade" id="agregar_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Agregar Producto</strong></h5>
                <hr>
            </div>
            <div class="modal-body">

                <?= $this->Form->create(@$nuevo_producto, ['type' => 'file']) ?>

                    <center> <h4>Datos del producto</h4> </center>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Grupo</label>
                            <?= $this->Form->select('id_grupo', $grupos, ['required', 'empty' => '--Seleccione--']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Denominacion </label>
                            <?= @$this->Form->textarea('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Denominacion', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 2]); ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Descripcion </label>
                            <?= @$this->Form->textarea('descripcion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Descripcion', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 3]); ?>
                        </div>
                    </div>


                    <div class="form-row" style="margin-bottom: 5px;">
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Codigo de producto </label>
                            <?= @$this->Form->input('codigo', ['type' => 'text', 'label' => false, 'placeholder' => 'Codigo de producto', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                        </div>
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Precio </label>
                            <?= @$this->Form->input('precio', ['type' => 'text', 'label' => false, 'class'=> 'form-control moneda', 'placeholder' => '0.00', 'onKeyPress' => 'return soloNumPunto(event);', 'autocomplete' => 'off']); ?>
                        </div>
                        <div class="form-group col-md-6" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Imagen </label>
                            <?= @$this->Form->input('photo', ['type' => 'file', 'label' => false]); ?>
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
