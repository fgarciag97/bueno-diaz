<main>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Bank accounts</h1>
    <button type="button" class="btn btn-sm btn-primary shadow-sm " data-toggle="modal" data-target="#agregar_cuenta"> Add Account </button>
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
              <th><?= $this->Paginator->sort('banco', 'Bank') ?></th>
                    <th><?= $this->Paginator->sort('numero_cuenta', 'Account number #') ?></th>
                    <th><?= $this->Paginator->sort('cedula', 'Identification card') ?></th>
                    <th><?= $this->Paginator->sort('responsable', 'In the name of') ?></th>
                    <th><?= $this->Paginator->sort('telefono', 'Phone') ?></th>
                    <th style="text-align: center;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $n = @count($cuentas); if (isset($cuentas) && $n!=0){ ?>
              <?php foreach ($cuentas as $cuenta): ?>
                <tr>
                    <td>
                      <?= $cuenta->banco ?>
                    </td>
                    <td>
                      <?= $cuenta->numero_cuenta ?>
                    </td>
                    <td>
                      <?= $cuenta->cedula ?>
                    </td>
                    <td>
                      <?= $cuenta->responsable ?>
                    </td>
                    <td>
                      <?= $cuenta->telefono ?>
                    </td>
                  <td style="text-align: center;">
                      <a 
                        data-toggle="modal"
                        id = "<?= $cuenta->id ?>"
                        banco ="<?= $cuenta->id_banco ?>"
                        numero_cuenta ="<?= $cuenta->numero_cuenta ?>"
                        tipo_cuenta ="<?= $cuenta->tipo_cuenta ?>"
                        responsable ="<?= $cuenta->responsable ?>"
                        cedula ="<?= $cuenta->cedula ?>"
                        correo ="<?= "$cuenta->correo" ?>"
                        telefono ="<?= $cuenta->telefono ?>"
                        onclick="editar_cuenta(this);" 
                        class="btn btn-warning btn-circle" 
                        style="color: white">
                        <i class="fas fa-pen"></i>
                      </a>
                    <?= $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'delete', $cuenta->id], ['confirm' => __('Sure you want to delete it?'), 'class' => 'btn btn-danger btn-circle', 'tabindex' => '-1','escape' => false]) ?>
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

<?= @$this->element('agregar_cuenta') ?>
<?= @$this->element('editar_cuenta') ?>