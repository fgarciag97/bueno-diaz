    
<div > 
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #4e73df">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;"> Personal information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #e3e3e3;">

        <div class="card-body">
                <?= $this->Form->create(@$contraseña, ['type' => 'post', 'url' => ['controller' => 'Perfil', 'action' => 'password']]) ?>
                    <div class="row">
                        <div class="col-md-12 pr-1">
                            <div class="form-group">
                                <label>Contraseña Actual</label>
                                <input type="password" class="form-control" name="actual" placeholder="Contraseña" onkeyup = 'mayus(this);'>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>Nueva Contraseña</label>
                                <input type="password" class="form-control" name="nueva1" placeholder="Contraseña" onkeyup = 'mayus(this);'>
                            </div>
                            <div class="form-group">
                                <label>Repita Contraseña</label>
                                <input type="password" class="form-control" name="nueva2" placeholder="Contraseña" onkeyup = 'mayus(this);'>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-info btn-fill pull-right">Update password</button>
                    <div class="clearfix"></div>
                <?= $this->Form->end() ?>
            </div>
          </div>
        </div>
                
      </div>
         </div>
  </div>
</div>






































