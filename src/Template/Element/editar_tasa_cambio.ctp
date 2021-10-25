<div class="modal fade" id="editar_tasa_cambio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #4e73df">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;"> Actualizacion de Tasa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #e3e3e3;">

        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <?= $this->Form->create(@$a) ?>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <label> Tasa del dia </label>
                    <input type="text" class="form-control moneda" name="monto" placeholder="Monto en Bs" autocomplete="off" required>
                  </div>
                </div>

            </div>
          </div>
        </div>
                
      </div>
      <div class="modal-footer" style="background: #e3e3e3;">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-info btn-fill">Actualizar</button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>

