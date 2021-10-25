<div class="modal fade" id="modificar_producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Modificar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post" id="producto">
                <div class="modal-body">
                    <center> <h4>Datos del producto</h4> </center>

                    <?= @$this->Form->hidden('id', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'autocomplete' => 'off', 'readonly', 'id' => 'pd_id']); ?>


                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputCity"> Grupo</label>
                            <?= $this->Form->select('id_grupo', $grupos, ['required', 'empty' => '--Seleccione--', 'id' => 'pd_id_grupo']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Denominacion </label>
                            <?= @$this->Form->textarea('denominacion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Denominacion', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 2, 'id' => 'pd_denominacion']); ?>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Descripcion </label>
                            <?= @$this->Form->textarea('descripcion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Descripcion', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 3, 'id' => 'pd_descripcion']); ?>
                        </div>
                    </div>


                    <div class="form-row" style="margin-bottom: 5px;">
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Codigo de producto </label>
                            <?= @$this->Form->input('codigo', ['type' => 'text', 'label' => false, 'placeholder' => 'Codigo de producto', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'id' => 'pd_codigo']); ?>
                        </div>
                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Precio </label>
                            <?= @$this->Form->input('precio', ['type' => 'text', 'label' => false, 'class'=> 'form-control moneda', 'placeholder' => '0.00', 'onKeyPress' => 'return soloNumPunto(event);', 'autocomplete' => 'off', 'id' => 'pd_precio']); ?>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-info btn-fill">Modificar</button>
              <?= $this->Form->end() ?>
            </div>
          </form>
        </div>
      </div>
    </div>