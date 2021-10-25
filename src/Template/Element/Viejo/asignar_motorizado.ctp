<div class="modal fade" id="asignar_motorizado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Listado de Motorizados</h5>
          </div>
          <form action="" method="post" id="motorizados">
            <div class="modal-body">
                <div id="moto"></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-info btn-fill">Asignar</button>
              <?= $this->Form->end() ?>
            </div>
          </form>
        </div>
      </div>
    </div>