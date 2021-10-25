
    <body class="page-template-default page page-id-15 wp-custom-logo theme-astra fl-builder woocommerce-no-js ast-desktop ast-page-builder-template ast-no-sidebar astra-2.5.0 ast-header-custom-item-inside ast-single-post ast-woocommerce-cart-menu ast-replace-site-logo-transparent ast-inherit-site-logo-transparent ast-theme-transparent-header astra-addon-2.5.1" itemscope="itemscope" itemtype="https://schema.org/WebPage">
        <div class="hfeed site" id="page">
           
            <div class="site-content" id="content">
                <div class="ast-container">
                    <div class="content-area primary" id="primary">
                        <main class="site-main" id="main">
                            <article class="post-15 page type-page status-publish ast-article-single" id="post-15" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                <header class="entry-header ast-header-without-markup">
                                </header>
                                <div class="entry-content clear" itemprop="text">
                                    <div class="fl-builder-content fl-builder-content-15 fl-builder-content-primary" data-post-id="15">
                                        <div class="fl-row fl-row-full-width fl-row-bg-color fl-node-5d1b20552f95b" data-node="5d1b20552f95b">
                                            <div class="fl-row-content-wrap">
                                                <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                                    <div class="fl-col-group fl-node-5d1b20552f956" data-node="5d1b20552f956">
                                                        <div class="fl-col fl-node-5d1b20552f958" data-node="5d1b20552f958">
                                                            <div class="fl-col-content fl-node-content">
                                                                <div class="fl-module fl-module-uabb-heading fl-node-5d1b20552f95a" data-node="5d1b20552f95a">
                                                                    <div class="fl-module-content fl-node-content">
                                                                        <div class="uabb-module-content uabb-heading-wrapper uabb-heading-align-center ">
                                                                            <h1 class="uabb-heading">
                                                                                <span class="uabb-heading-text">
                                                                                    Personal information
                                                                                </span>
                                                                            </h1>
                                                                            <div class="uabb-module-content uabb-separator-parent">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl-row fl-row-full-width fl-row-bg-none fl-node-5d1b1aaf9cb03" data-node="5d1b1aaf9cb03">
                                            <div class="fl-row-content-wrap">
                                                <div class="fl-row-content fl-row-fixed-width fl-node-content">
                                                    <div class="fl-col-group fl-node-5d1b1aafaa439" data-node="5d1b1aafaa439">
                                                        <div class="fl-col fl-node-5d1b1aafaa5e5 fl-col-has-cols" data-node="5d1b1aafaa5e5">
                                                            <div class="fl-col-content fl-node-content">
                                                                <div class="fl-module fl-module-image-icon fl-node-5d1b1aff6270f" data-node="5d1b1aff6270f">
                                                                    <div class="fl-module-content fl-node-content">
                                                                        <div class="uabb-module-content uabb-imgicon-wrap">
                                                                            <div class="uabb-image uabb-image-crop-simple " itemscope="" itemtype="http://schema.org/ImageObject">
                                                                                <div class="uabb-image-content">
                                                                                     <?=$this->html->image('hoja.png', ['class' => 'uabb-photo-img wp-image-1769 size-full', 'style' => 'width: 110px']);?>
                                                                                    <div class="fl-module fl-module-uabb-button fl-node-5d1b01cdd9947" data-node="5d1b01cdd9947">
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>




                                                                <!--------------------------------------------------------------------->
                                                                <div class="row">
                                                                  <div class="col-md-6">
                                                                      <div class="card">
                                                                          <div class="card-header">
                                                                              <h4 class="card-title">Name and address</h4>
                                                                          </div>
                                                                          <div class="card-body">
                                                                             

                                                                            <?= $this->Form->create(@$usuario, ['url' => ['action' => 'perfil']]) ?>

                                                                              <input type="text" class="form-control" name="ruta" value="1" readonly required hidden>

                                                                              <div class="form-group row">
                                                                                <div class="col-sm-6">
                                                                                  <label>First Name</label>
                                                                                  <input type="text" class="form-control" name="nombres" placeholder="" autocomplete="off" required value="<?= $usuario->nombres ?>">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                  <label>Last Name</label>
                                                                                  <input type="text" class="form-control" name="apellidos" placeholder="" autocomplete="off" required value="<?= $usuario->apellidos ?>">
                                                                                </div>
                                                                              </div>
                                                                              
                                                                              <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                  <label>Mailing Address</label>
                                                                                  <input type="text" class="form-control" value="<?= $usuario->direccion ?>" name="direccion" autocomplete="off" required >
                                                                                </div>
                                                                              </div>

                                                                              <div class="form-group row">
                                                                                <div class="col-sm-5">
                                                                                  <label>City</label>
                                                                                  <input type="text" class="form-control" name="city" placeholder="" autocomplete="off" required value="<?= $usuario->city ?>">
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                  <label>State</label>
                                                                                  <input type="text" class="form-control" name="state" placeholder="" autocomplete="off" required value="<?= $usuario->state ?>">
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                  <label>ZIPCode</label>
                                                                                  <input type="text" class="form-control" name="code" placeholder="" autocomplete="off" required value="<?= $usuario->code ?>">
                                                                                </div>
                                                                              </div>

                                                                              <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                  <label>Phone number</label>
                                                                                  <input type="text" class="form-control" name="telefono" onKeyPress='return soloNum(event);' autocomplete="off" required value="<?=$usuario->movil?>">
                                                                                </div>
                                                                              </div>
                                                                              
                                                                              <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                  <label>Company</label>
                                                                                  <input type="text" class="form-control" name="company" autocomplete="off" value="<?= $usuario->company ?>">
                                                                                </div>
                                                                              </div>

                                                                              <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                  <label>Job Descriptions</label>
                                                                                  <input type="text" class="form-control" name="nota" autocomplete="off" required value="<?= $usuario->nota ?>">
                                                                                </div>
                                                                              </div>

                                                                              <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                                                          <?= $this->Form->end() ?>

                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="card">
                                                                          <div class="card-header">
                                                                              <h4 class="card-title">Email and password</h4>
                                                                          </div>
                                                                          <div class="card-body">
                                                                               <?= $this->Form->create(@$contraseña, ['type' => 'post', 'url' => ['action' => 'password']]) ?>

                                                                                    <input type="text" class="form-control" name="ruta" value="2" readonly required hidden>

                                                                                    <div class="col-md-12 form-group">
                                                                                       <label>Email</label>
                                                                                       <input class="form-control" name="correo" required type="text" autocomplete="off" value="<?=$usuario->correo?>" readonly disabled>
                                                                                    </div>

                                                                                    <hr>

                                                                                    <div class="col-md-12 form-group">
                                                                                       <label>Current password</label>
                                                                                       <input class="form-control" name="actual" placeholder="**********" required type="password" autocomplete="off">
                                                                                    </div>
                                                                                    <div class="col-md-12 form-group">
                                                                                        <label>New Password</label>
                                                                                        <input class="form-control" name="nueva1" placeholder="**********" required type="password" autocomplete="off">
                                                                                    </div>
                                                                                    <div class="col-md-12 form-group">
                                                                                        <label>Confirm Password</label>
                                                                                        <input class="form-control" name="nueva2" placeholder="**********" required type="password" autocomplete="off">
                                                                                    </div>
                                                                                  
                                                                                  <button type="submit" class="btn btn-info btn-fill pull-right">UPDATE</button>
                                                                                 
                                                                                  <div class="clearfix"></div>
                                                                              <?= $this->Form->end() ?>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              

                                                                <!--------------------------------------------------------------------->
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


