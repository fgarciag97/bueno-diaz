<?= $this->Html->css('estrellas'); ?>
<div class="modal fade" id="agregar_comentario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-mb" role="document">
        <div class="modal-content">
            <div class="modal-body" >

                <?= $this->Form->create(@$nueva_clasificacion) ?>

                <center> <h5>Por favor, clasifiquenos</h5> </center>
                    <hr>

                    <input type="text" name="id_carrito" id="carrito" hidden>
                    <div class="rating" style="width: 20rem; margin-left: 25%">
                        <input id="rating-5" type="radio" name="estrellas" value="5"/><label for="rating-5"><i class="fas fa-3x fa-star"></i></label>
                        <input id="rating-4" type="radio" name="estrellas" value="4"/><label for="rating-4"><i class="fas fa-3x fa-star"></i></label>
                        <input id="rating-3" type="radio" name="estrellas" value="3"/><label for="rating-3"><i class="fas fa-3x fa-star"></i></label>
                        <input id="rating-2" type="radio" name="estrellas" value="2"/><label for="rating-2"><i class="fas fa-3x fa-star"></i></label>
                        <input id="rating-1" type="radio" name="estrellas" value="1"/><label for="rating-1"><i class="fas fa-3x fa-star"></i></label>
                    </div>
                    <br>
                    <div class="form-group col-md-12" style="margin-bottom: 5px;">
                        <label for="formGroupExampleInput" style="margin-left: 37%"> Comentario </label>
                        <?= @$this->Form->textarea('comentario', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Comentario', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);']); ?>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-info btn-fill">Enviar</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
