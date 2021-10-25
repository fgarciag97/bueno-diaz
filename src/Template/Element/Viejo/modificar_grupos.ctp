<div class="modal fade" id="modificar_grupos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Modificar Grupo</h5>
                <hr>
            </div>
            <form action="" method="post" id="grupos">
                <div class="modal-body" style="background: #e3e3e3;">

                    <fieldset>
                        <?php
                            echo $this->Form->hidden('id', ['required', 'id' => 'g_id']);

                            echo $this->Form->control('denominacion', ['type' => 'text', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'id' => 'g_denominacion']);
                        ?>
                    </fieldset>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-info btn-fill">Modificar</button>
                  <?= $this->Form->end() ?>
                </div>
            </form>
        </div>
    </div>
</div>