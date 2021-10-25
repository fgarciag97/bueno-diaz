<div class="modal fade" id="modificar_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true"> 
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #4e73df">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;"> Modify administrator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #e3e3e3;">

        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <?= $this->Form->create(@$login, ['url' => ['action' => 'edita']]) ?>

              <input type="text" class="form-control" name="id" id="m_a_id" readonly required hidden>

                <div class="form-group row">
                  <!--<div class="col-sm-4">
                    <label>Identification Card</label>
                    <input type="text" class="form-control" name="cedula" placeholder="Identification Card" onKeyPress='return soloNum(event);' autocomplete="off" required readonly id="m_a_cedula">
                  </div>-->
                  <div class="col-sm-12">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="nombres" placeholder="Full Name" autocomplete="off" required id="m_a_nombres">
                  </div>
                </div>

                <hr>

                <div class="form-group row">
                  <div class="col-sm-8">
                    <label>Email</label>
                    <input type="email" class="form-control" name="correo" placeholder="Email" autocomplete="off" required id="m_a_correo">
                  </div>
                  <div class="col-sm-4">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" onkeyup='mayus(this);' autocomplete="off" required> <!--id="m_a_password"-->
                  </div>
                  <!--<div class="col-sm-5">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="movil" placeholder="Phone" onKeyPress='return soloNum(event);' autocomplete="off" required id="m_a_movil">
                  </div>-->
                </div>

                <!--<div class="form-group row">
                  <div class="col-sm-4">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" onkeyup='mayus(this);' autocomplete="off" required id="m_a_password">
                  </div>
                </div>-->

                <hr>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <label>Direction</label>
                    <textarea type="textarea" class="form-control" name="direccion" placeholder="Direction" autocomplete="off" required id="m_a_direccion"></textarea>
                  </div>
                </div>

            </div>
          </div>
        </div>
                
      </div>
      <div class="modal-footer" style="background: #e3e3e3;">
        <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-fill">To update</button>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</div>

