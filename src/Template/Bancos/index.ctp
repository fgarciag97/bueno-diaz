<main>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Banks</h1>
    <button type="button" class="btn btn-sm btn-primary shadow-sm " data-toggle="modal" data-target="#agregar_bancos"> Add Banks </button>
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
              <th><?= $this->Paginator->sort('denominacion', 'Denomination') ?></th>

                            <th>Url</th>
                    <th style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $n = @count($grupos); if (isset($grupos) && $n!=0){ ?>
              <?php foreach ($grupos as $grupo): ?>
                <tr>
                    <td>
                      <?= $grupo->denominacion ?>
                       
                    </td>


                    <td>
                     
                       <?= $grupo->url ?>
                    </td>

                  <td style="text-align: center;">
                      <a 
                        data-toggle="modal"
                        id = "<?= $grupo->id ?>"
                        denominacion ="<?= $grupo->denominacion ?>"
                        url ="<?= $grupo->url ?>"
                        onclick="editar_bancos(this);" 
                        class="btn btn-warning btn-circle" 
                        style="color: white">
                        <i class="fas fa-pen"></i>
                      </a>
                    <?= $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'delete', $grupo->id], ['confirm' => __('Sure you want to delete it?'), 'class' => 'btn btn-danger btn-circle', 'tabindex' => '-1','escape' => false]) ?>
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

<?= @$this->element('agregar_bancos') ?>
<?= @$this->element('editar_bancos') ?>