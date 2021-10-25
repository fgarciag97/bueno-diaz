<main>
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="mt-4 d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Catalogue</h1>
      <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#agregar_producto"> Add Product</button>
    </div>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
 
            <table class="table table-hover ">
                <thead>
                    <th></th>
                    <th><?= $this->Paginator->sort('denominacion', 'Short description') ?></th>
                    <th><?= $this->Paginator->sort('precio', 'Price') ?></th>
                    <!--<th><?= $this->Paginator->sort('precio_bs', 'Precio Bs.S') ?></th>-->
                    <th><?= $this->Paginator->sort('codigo', 'Code') ?></th>
                    <th><?= $this->Paginator->sort('grupo', 'Category') ?></th>
                    <th><?= $this->Paginator->sort('subcategorias', 'SubCategory') ?></th>
                    <th>Action</th>
                    <th style="text-align: center;">Best sellers</th>
                    <th style="text-align: center;">State</th>
                    <!--<th>Precio Promo</th>-->
                </thead>
                <tbody>
                    <?php $n = count($catalogos); if (isset($catalogos) && $n!=0){ ?>
                        <?php foreach ($catalogos as $catalogo): ?>
                          <tr>
                              <td>
                                <?= $this->Html->image('../productos/productos/photo/'.$catalogo->photo_dir.'/'.$catalogo->photo, ['height' => '100']) ?>
                              </td>
                              <td>
                                <?= $catalogo->denominacion ?>
                              </td>
                              <td>
                                $ <?= number_format($catalogo->precio, 2, '.', ','); ?>
                              </td>
                              <!-- <td>
                                <?= number_format($catalogo->precio_bs, 2, '.', ','), 'Bs'; ?>
                              </td>-->
                              <td>
                                <?= $catalogo->codigo ?>
                              </td>
                              <td>
                                <?= $catalogo->grupo ?>
                              </td>
                              <td>
                                <?= $catalogo->subcategorias ?>
                              </td>
                              <td>
                                <a data-toggle="modal"
                                  id = "<?= $catalogo->id ?>"
                                  id_grupo = "<?= $catalogo->id_grupo ?>"
                                  denominacion = "<?= $catalogo->denominacion ?>"
                                  descripcion = "<?= $catalogo->descripcion ?>"
                                  codigo = "<?= $catalogo->codigo ?>"
                                  precio = "<?= $catalogo->precio ?>"
                                  onclick="modificar_producto(this);" class="btn btn-info btn-sm" style="color: white">
                                  <i class="fa fa-pen"></i>
                                </a>

                                <a data-toggle="modal"
                                  id = "<?= $catalogo->id ?>"
                                  onclick="modificar_foto(this);" class="btn btn-warning btn-sm" style="color: white">
                                  <i class="fa fa-image"></i>
                                </a>
                        
                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'deleteproducto', @$catalogo->id], ['confirm' => __('You want to delete it?'), 'class' => 'btn btn-danger btn-sm', 'tabindex' => '-1', 'escape' => false]) ?>

                              </td>
                              <td style="text-align: center;">
                                <?php
                                  if($catalogo->promocion){
                                    echo $this->Form->postLink("<i style='color:white' class='fa fa-check'></i>", ['action' => 'promo', $catalogo->id, 0], ['class' => 'btn btn-success btn-circle btn-sm', 'tabindex' => '-1', 'escape' => false]);
                                  }else{
                                    echo $this->Form->postLink("<i style='color:white' class='fa fa-times-circle'></i>", ['action' => 'promo', $catalogo->id, 1], ['class' => 'btn btn-danger btn-circle btn-sm', 'tabindex' => '-1', 'escape' => false]);
                                  }
                                ?>
                              </td>
                              <td style="text-align: center;">
                                <?php
                                  if($catalogo->status){
                                    echo $this->Form->postLink("<i style='color:white' class='fa fa-check'></i>", ['action' => 'status', $catalogo->id, 0], ['class' => 'btn btn-success btn-circle btn-sm', 'tabindex' => '-1', 'escape' => false]);
                                  }else{
                                    echo $this->Form->postLink("<i style='color:white' class='fa fa-times-circle'></i>", ['action' => 'status', $catalogo->id, 1], ['class' => 'btn btn-danger btn-circle btn-sm', 'tabindex' => '-1', 'escape' => false]);
                                  }
                                ?>
                              </td>
                              <!--<td>
                                <?php if($catalogo->promocion){ ?>
                                  <?= $this->Form->create(@$promo, ['url' => ['action' => 'preciopromo']]) ?>
                                      <?= $this->Form->hidden('id', ['type' => 'text', 'readonly', 'value' => $catalogo->id]); ?>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <?= $this->Form->input('precio_promocion', ['type' => 'text', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off', 'value' => number_format($catalogo->precio_promocion, 2, '.', ''), 'class' => 'moneda', 'label' => false]); ?>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <button type="submit" class="btn btn-success btn-sm" style="margin-top: 3%"> <i class="fa fa-plus"></i> </button>
                                        </div>
                                      </div>
                                  <?= $this->Form->end() ?>
                                <?php } ?>
                              </td>-->
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

<?= $this->element('agregar_catalogo') ?>
<?= $this->element('modificar_catalogo') ?>
<?= $this->element('modificar_foto') ?>