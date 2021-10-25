 <?= $this->Flash->render() ?>

<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
    
        <div class="section-top-border">
            <button type="button" class="genric-btn info circle pull-right" data-toggle="modal" data-target="#agregar_cuentas">Agregar</button>
            <h3 class="mb-30">Cuentas Bancarias</h3>
 
            <table class="table table-hover ">
                <thead>
                    <th><?= $this->Paginator->sort('banco') ?></th>
                    <th><?= $this->Paginator->sort('numero_cuenta') ?></th>
                    <th><?= $this->Paginator->sort('cedula', 'CI/RIF') ?></th>
                    <th><?= $this->Paginator->sort('responsable') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php $n = count($cuentas); if (isset($cuentas) && $n!=0){ ?>
                        <?php foreach ($cuentas as $cuenta): ?>
                          <tr>
                              <td>
                                <?= $cuenta->denominacion ?>
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
                              <td>
                                <a data-toggle="modal"
                                  id = "<?= $cuenta->id ?>"
                                  banco ="<?= $cuenta->banco ?>"
                                  numero_cuenta ="<?= $cuenta->numero_cuenta ?>"
                                  tipo_cuenta ="<?= $cuenta->tipo_cuenta ?>"
                                  responsable ="<?= $cuenta->responsable ?>"
                                  cedula ="<?= $cuenta->cedula ?>"
                                  correo ="<?= "$cuenta->correo" ?>"
                                  telefono ="<?= $cuenta->telefono ?>"
                                  onclick="modificar_cuenta(this);" class="genric-btn success circle arrow" style="color: white">Editar
                                </a>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deletecuenta', @$cuenta->id], ['confirm' => __('Desea eliminarlo?'), 'class' => 'genric-btn danger circle arrow']) ?>
                       
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
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers(['after' => '', 'before' => '']) ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            </ul>
        </div>
    </div>
</div>

<?= $this->element('agregar_cuenta') ?>
<?= $this->element('modificar_cuenta') ?>