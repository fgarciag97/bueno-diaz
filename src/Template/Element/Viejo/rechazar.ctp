 <form action="" method="post" id="rechazar">
    <div class="modal fade" id="declinar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;">Declinar Pago </h5>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput"> Nota de Rechazo </label>
                <?= @$this->Form->hidden('id', ['type' => 'text', 'label' => false, 'required', 'autocomplete' => 'off', 'readonly', 'id' => 'r_id']); ?>
                <?= @$this->Form->input('nota', ['type' => 'textarea', 'label' => false, 'class'=> 'form-control', 'required', 'autocomplete' => 'off', 'id'=> 'r_motivo', 'onkeyup' => 'mayus(this);']); ?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-fill pull-right">Declinar</button>
          </div>
        </div>
      </div>
    </div>
   </form>