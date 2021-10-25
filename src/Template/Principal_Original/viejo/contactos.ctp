<?= $this->Flash->render() ?>
<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
    
        <div class="section-top-border">
          <table class="table table-hover ">
             <h3 class="mb-30">Mensajes enviamos por los clientes</h3>    
                <thead>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('correo') ?></th>
                    <th>ACCIONES</th>
                </thead>
                <tbody>
                    <?php $n = count($contactos); if (isset($contactos) && $n!=0){ ?>
                        <?php foreach ($contactos as $contactos): ?>
                          <tr>
                              <td>
                                <?= $contactos->titulo ?>
                              </td>
                              <td>
                                <?= $contactos->correo ?>
                              </td>
                                <td>
                                  <a data-toggle="modal"
                                  id = "<?= $contactos->id ?>"
                                  mensaje ="<?= $contactos->mensaje ?>"
                                  onclick="ver_mensaje(this);" class="genric-btn success circle arrow">Ver mensaje
                                </a>

                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'eliminarcontacto', $contactos->id], ['confirm' => __('Seguro que desea eliminarlo?'), 'class' => 'genric-btn danger circle arrow']) ?>
                              </td>
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


<?= $this->element('ver_mensaje') ?>