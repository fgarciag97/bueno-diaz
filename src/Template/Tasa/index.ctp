<main>
<div class="container-fluid">

  <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tasa</h1>
    <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#editar_tasa_cambio"> Actualizar Tasa </button>
  </div>

  <div class="row">

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tasa del dia 1$</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= @number_format($tasa[0]['monto'], 2, ',', '.'); ?> Bs</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Tasa Anterior 1$</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= @number_format($tasa[1]['monto'], 2, ',', '.'); ?> Bs</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Ultima actualizacion</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= @date_format($tasa[0]['fecha'], 'd/m/Y') ?> </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total de actualizaciones</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= @$tasa[0]['id'] ?></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-history fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

    <div class="row">
      <div class="col-lg-12">
<!--
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Rubros</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th> Unidad </th>
                    <th><?= $this->Paginator->sort('rubro') ?></th>
                    <th><?= $this->Paginator->sort('monto', 'Monto Fijado $') ?> </th>
                    <th> Tasa al Cambio Bs </th>
                    <th> <strong> Acción </strong> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $n = @count($rubros); if (isset($rubros) && $n!=0){ ?>
                    <?php foreach ($rubros as $rubro): ?>
                      <tr>
                        <td> 1 Kg. </td>
                        <td> <?= $rubro->rubro ?></td>
                        <td> $ <?= @number_format($rubro->monto, 2, ',', '.'); ?></td>
                        <td> <?= @number_format($rubro->monto*$tasa[0]['monto'], 2, ',', '.'); ?> Bs </td>
                        <td>
                          <a 
                            id = "<?= $rubro->id ?>"
                            monto = "<?= @number_format($rubro->monto, 2, ',', '.') ?>"
                            onclick="editar_tasa(this);" 
                            class="btn btn-warning btn-circle" 
                            style="color: white">
                            <i class="fas fa-pen"></i>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php } else{ ?>
                      <tr>
                          <td colspan="7">No existen registros</td>
                      </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

           <div class="row">
            <div class="col-sm-12 col-md-11">
                <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                        <?= $this->Paginator->numbers(['after' => '', 'before' => '']) ?>
                        <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                    </ul>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
-->

<?= $this->element('editar_tasa') ?>
<?= $this->element('editar_tasa_cambio') ?>