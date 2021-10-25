 <?= $this->Flash->render() ?>

<div class="whole-wrap">
    <div class="container box_1170">
    
        <div class="section-top-border">
            <button type="button" class="genric-btn info circle pull-right" data-toggle="modal" data-target="#agregar_empresas">Agregar</button>
            <h3 class="mb-30">Empresas Registrados</h3>
 
            <table class="table table-hover ">
                <thead>
                    <th><?= $this->Paginator->sort('cedula', 'Identificación') ?></th>
                    <th><?= $this->Paginator->sort('nombres', 'Razon Social') ?></th>
                    <th><?= $this->Paginator->sort('fecha_registro') ?></th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    <?php $n = count($usuarios); if (isset($usuarios) && $n!=0){ ?>
                        <?php foreach ($usuarios as $usuario): ?>
                          <tr>
                              <td>
                                <?= $usuario->letra . "-" . $usuario->cedula ?>
                              </td>
                              <td>
                                <?= $usuario->nombres ?>
                              </td>
                              <td>
                                <?= date_format($usuario->fecha_registro, 'd/m/Y') ?>
                              </td>
                              <td>
                                <a data-toggle="modal"
                                  id = "<?= $usuario->id ?>"
                                  identificacion = "<?= $usuario->letra . "-" . $usuario->cedula ?>"
                                  cedula ="<?= $usuario->cedula ?>"
                                  letra ="<?= $usuario->letra ?>"
                                  nombres ="<?= $usuario->nombres ?>"
                                  correo ="<?= $usuario->correo ?>"
                                  movil ="<?= $usuario->movil ?>"
                                  fijo ="<?= $usuario->fijo ?>"
                                  direccion ="<?= $usuario->direccion ?>"
                                  nota ="<?= $usuario->nota ?>"
                                  onclick="modificar_empresa(this);" class="genric-btn success circle arrow" style="color: white">Editar
                                </a>
                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'deleteEmpresas', @$usuario->id], ['confirm' => __('Desea eliminarlo?'), 'class' => 'genric-btn danger circle arrow']) ?>
                       
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

<?= $this->element('agregar_empresa') ?>
<?= $this->element('modificar_empresa') ?>