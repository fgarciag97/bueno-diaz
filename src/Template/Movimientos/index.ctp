<main>



<div class="container-fluid">

  <!-- Page Heading -->
  <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Product movements</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Filter Records</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <?= $this->Form->create(@$agregar, ['url' => ['action' => 'index']]) ?>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>
                    <label for="inputCity"> Groups</label>
                    <?= $this->Form->select('id_grupo', $grupos, ['required', 'empty' => '--Select--']); ?>
                </th>
                <th>
                    <button type="submit" class="btn btn-info btn-fill">Filter</button>
                </th>
              </tr>
            </thead>
          </table>
        <?= $this->Form->end() ?>
      </div>
    </div>

  </div>
</div>



<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th></th>
              <th><?= $this->Paginator->sort('producto', 'Product') ?></th>
              <th><?= $this->Paginator->sort('cantidad' , 'Quantity') ?></th>
              <!--<th><?= $this->Paginator->sort('precio') ?></th>-->
              <th><?= $this->Paginator->sort('fecha', 'Date') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php $n = @count($historial); if (isset($historial) && $n!=0){ ?>
              <?php foreach ($historial as $movimientos): ?>
                <tr>
                    <td>
                      <?= $this->Html->image('../productos/productos/photo/'.$movimientos->photo_dir.'/'.$movimientos->photo, ['height' => '100']) ?>
                    </td>
                    <td>
                      <?= $movimientos->producto ?>
                    </td> 
                    <td>
                      <?= $movimientos->cantidad ?>
                    </td>
                    <!--<td>
                      <?= number_format($movimientos->precio, 2, ',', '.') ?>
                    </td>-->
                    <td>
                      <?= date_format($movimientos->fecha, 'd-m-Y')?>
                    </td>
                  </tr>
              <?php endforeach; ?>
            <?php } else{ ?>
                <tr>
                    <td colspan="10">There are no records</td>
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
                  <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                  <?= $this->Paginator->numbers(['after' => '', 'before' => '']) ?>
                  <?= $this->Paginator->next(__('Following') . ' >') ?>
              </ul>
          </div>
      </div>
    </div>

  </div>
</div>
</main>