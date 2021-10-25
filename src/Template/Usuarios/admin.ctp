<main>
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Administrators</h1>
      <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#agregar_admin"> Add administrator </button>
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
                <th><?= $this->Paginator->sort('nombres', 'Full name') ?></th>
                <th><?= $this->Paginator->sort('correo', 'Email') ?></th>
                <th><?= $this->Paginator->sort('direccion', 'Address') ?></th>
                <th> Condition </th>
                <th> <strong> Action </strong> </th>
              </tr>
            </thead>
            <tbody>
              <?php $n = @count($admin); if (isset($admin) && $n!=0){ ?>
                <?php foreach ($admin as $adm): ?>
                  <tr>
                    <td> <?= $adm->nombres ?></td>
                    <td> <?= $adm->correo ?></td>
                    <td> <?= $adm->direccion ?></td>
                    <td> 
                      <?php
                          if($adm->estatus){
                            echo $this->Form->postLink("<i style='color:white' class='fa fa-check'></i>", ['action' => 'condiciona', $adm->id, 0], ['class' => 'btn btn-success btn-circle', 'tabindex' => '-1', 'escape' => false]);
                          }else{
                            echo $this->Form->postLink("<i style='color:white' class='fa fa-times-circle'></i>", ['action' => 'condiciona', $adm->id, 1], ['class' => 'btn btn-danger btn-circle', 'tabindex' => '-1', 'escape' => false]);
                          }
                        ?>
                    </td>
                    <td>
                      <a 
                        id = "<?= $adm->id ?>"
                        cedula = "<?= $adm->letra . "-" . $adm->cedula ?>"
                        nombres = "<?= $adm->nombres ?>"
                        correo = "<?= $adm->correo ?>"
                        password = "<?= $adm->password ?>"
                        movil = "<?= $adm->movil ?>"
                        direccion = "<?= $adm->direccion ?>"
                        privilegio = "<?= $adm->privilegio ?>"
                        onclick="modificar_admin(this);" 
                        class="btn btn-warning btn-circle" 
                        style="color: white">
                        <i class="fas fa-pen"></i>
                      </a>
                      <?= $this->Form->postLink(__('<i class="fas fa-trash"></i>'), ['action' => 'deletea', $adm->id], ['confirm' => __('Are you sure you want to delete it?'), 'class' => 'btn btn-danger btn-circle', 'tabindex' => '-1','escape' => false]) ?>
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


<?= $this->element('agregar_admin') ?>
<?= $this->element('modificar_admin') ?>