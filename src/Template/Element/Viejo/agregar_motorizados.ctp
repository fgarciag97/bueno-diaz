<div class="modal fade" id="agregar_motorizado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color: white;"><strong>Agregar motorizado</strong></h5>
                <hr>
            </div>
            <div class="modal-body">

                <?= $this->Form->create(@$nuevo_motorizado) ?>

                    <center> <h4>Datos del Motorizado</h4> </center>

                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label for="inputCity"> Tipo &nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select required name="letra" class="selectpicker" data-live-search="false">
                                <option disabled selected>--</option>
                                <option data-tokens="V" value="V"> V </option>
                                <option data-tokens="J" value="J"> J </option>
                                <option data-tokens="G" value="G"> G </option>
                                <option data-tokens="P" value="P"> P </option>
                            </select>
                        </div>
                      
                        <div class="form-group col-md-4" style="margin-bottom: 5px;">
                            <label for="inputCity"> Identificación</label>
                            <?= @$this->Form->input('cedula', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'autofocus' => true, 'onKeyPress' => 'return soloNum(event);', 'placeholder' => 'Identificación', 'autocomplete' => 'off', 'required']); ?>
                        </div>

                        <div class="form-group col-md-7" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Nombre </label>
                            <?= @$this->Form->input('nombres', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Razon Social',  'onkeyup' => 'mayus(this);', 'autocomplete' => 'off', 'required']); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity"> Municipio</label>
                            <?= $this->Form->select('id_municipio', @$municipios, ['required', 'empty' => '--Seleccione--', 'id' => 'id_municipio']); ?>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputCity"> Parroquia</label>
                            <?= $this->Form->select('id_parroquia', @$parroquias, ['required', 'empty' => '--Seleccione Municipio--', 'id' => 'id_parroquia']); ?>
                          </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Dirección </label>
                            <?= @$this->Form->textarea('direccion', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Direccion', 'required', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 3]); ?>
                        </div>
                    </div>

                    <div class="form-row" style="margin-bottom: 5px;">
                        <div class="form-group col-md-6" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Correo </label>
                            <?= @$this->Form->input('correo', ['type' => 'email', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Correo', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                        </div>

                        <div class="form-group col-md-6" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Clave </label>
                            <?= @$this->Form->input('password', ['type' => 'password', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'clave', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                        </div>

                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Número Móvil </label>
                            <?= @$this->Form->input('movil', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Movil', 'required', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
                        </div>


                        <div class="form-group col-md-3" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Número Fijo </label>
                            <?= @$this->Form->input('fijo', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Fijo', 'onKeyPress' => 'return soloNum(event);', 'autocomplete' => 'off']); ?>
                        </div>


                        <div class="form-group col-md-6" style="margin-bottom: 5px;">
                            <label for="formGroupExampleInput"> Placa </label>
                            <?= @$this->Form->input('placa', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'placa de moto', 'required', 'onkeyup' => 'mayus(this);', 'autocomplete' => 'off']); ?>
                        </div>



                    </div>

                    <div class="form-row" style="margin-bottom: 5%;">
                        <div class="form-group col-md-11" style="margin-bottom: 5%;">
                            <label for="formGroupExampleInput"> Caracteristicas del Vehiculo </label>
                            <?= @$this->Form->textarea('nota', ['type' => 'text', 'label' => false, 'class'=> 'form-control', 'placeholder' => 'Caracteristicas', 'autocomplete' => 'off', 'onkeyup' => 'mayus(this);', 'rows' => 3]); ?>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-info btn-fill">Agregar</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>