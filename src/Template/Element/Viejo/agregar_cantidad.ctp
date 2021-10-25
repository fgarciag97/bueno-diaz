<div class="modal fade" id="agregar_cantidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Agregar Movimiento</strong></h5>
                <hr>
            </div>
            <div class="modal-body">

                <?= $this->Form->create(@$nuevo_movimientos, ['url' => ['action' => 'movimientos']], ['type' => 'file']) ?>

                   <?= @$this->Form->hidden('id_producto', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'id_producto']); ?>
                   <?= @$this->Form->hidden('precio', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'required', 'readonly', 'id' => 'm_precio']); ?>
                    

                    <div class="form-row">
                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                        </div>
                       <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="inputCity"> Cantidad de productos</label>
                            <?= @$this->Form->input('cantidad', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'placeholder' => 'Cantidad', 'autocomplete' => 'off', 'required']); ?>
                        </div>
                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
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
