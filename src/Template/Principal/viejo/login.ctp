    <?= $this->Flash->render() ?>

    <!--================login_part Area =================-->
    <section class="login_part ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Nuestro Sistema de Delivery</h2>
                            <p>Es un sistema creado pensando en las necesidades de la población.</p>
                            <a type="text" data-toggle='modal' data-target='#registrar' href="index.html" class="btn_3">Registrarse</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Bienvenido al Sistema Único <br>
                                de Delivery del Estado Falcón</h3>
                            <?= $this->Form->create('Principal', ['type' => 'post', 'url' => ['controller' => 'Principal', 'action' => 'login'], "class" => "row contact_form"]); ?>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="cedula" value=""
                                        placeholder="Cedula" onkeyup = 'mayus(this);' onKeyPress = 'return soloNum(event);'>
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Contraseña" onkeyup = 'mayus(this);'>
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Entrar
                                    </button>
                                </div>
                            <?= $this->Form->end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->



    <?= $this->element('registro') ?>