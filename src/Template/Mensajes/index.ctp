<main>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Messages</h1>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th><?= $this->Paginator->sort('fecha', 'Date') ?></th>
              <th><?= $this->Paginator->sort('titulo', 'Title') ?></th>
              <th><?= $this->Paginator->sort('correo', 'Mail') ?></th>
              <th><?= $this->Paginator->sort('mensaje', 'Message') ?></th>
              <th style="text-align: center"><?= $this->Paginator->sort('Action') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php $n = @count($mensaje); if (isset($mensaje) && $n!=0){ ?>
              <?php foreach ($mensaje as $sms): ?>
                <tr>
                  <td> <?= date_format($sms->fecha, 'm-d-Y') ?></td>
                  <td> <?= $sms->titulo ?></td>
                  <td> <?= $sms->correo ?></td>
                  <td> <?= $sms->mensaje ?></td>
                  <td style="text-align: center">
                    <?= $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'delete', $sms->id], ['confirm' => __('Sure you want to delete it?'), 'class' => 'btn btn-danger btn-circle', 'tabindex' => '-1','escape' => false]) ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php } else{ ?>
                <tr>
                    <td colspan="7">There are no records</td>
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