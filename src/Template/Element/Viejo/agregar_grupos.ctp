<div class="modal fade" id="agregar_grupos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Agregar Grupo</h5>
                <hr>
            </div>
            <div class="modal-body" style="background: #e3e3e3;">
                <?= $this->Form->create($nuevo_grupo) ?>
                    <fieldset>
                        <?= $this->Form->control('denominacion', ['type' => 'text', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                    </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info btn-fill">Agregar</button>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>