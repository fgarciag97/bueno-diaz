<!--MENU PARA TELEFONO-->
<link href="../fonts/ionicons.css" rel="stylesheet">

<section class="bg-6 h-500x main-slider pos-relative" style="background: url(../img/contacto.jpg) no-repeat center; background-size: cover">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h2 class="mt-30 mb-15" style="font-family: initial;">Contac Us</h2>
                                <?php if(@$this->request->session()->read("Auth.User.cedula") == ''){ ?>
                                    <!--<h5>
                                        <a href="#" data-toggle='modal' data-target='#login' class="btn-primaryc plr-25">
                                            <b>LOGIN</b>
                                        </a>
                                    </h5>-->
                                <?php } ?>
                        </div>
                </div>
        </div>
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading">
                        <h2 style="font-family: initial">¡Hello!</h2>
                        <h5 class="mt-10 mb-30" style="font-family: initial">Please, send us your message</h5>
                        <!--<p class="mx-w-700x mlr-auto">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium
                                elit elementum quis. Enean porttitor eros non ultrices convallis.
                                Vivamus quis dolor ut arcu lobortis finibus a vitae leo. Sed eget tempus sem.
                                Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus</p>-->
                </div>

                         <?= $this->Form->create(@$agregar) ?>
                <div class="form-style-1 placeholder-1">
                        <div class="row">
                                <div class="col-md-6"> <input class="mb-20" type="text" name="titulo" placeholder="Title" onkeyup='mayus(this);'>  </div>
                                <div class="col-md-6"> <input class="mb-20" type="email" name="correo" placeholder="E-Mail" onkeyup='mayus(this);'>  </div>
                                <div class="col-md-12">
                                        <textarea class="h-200x ptb-20" name="mensaje" placeholder="Message" onkeyup='mayus(this);'></textarea></div>
                        </div><!-- row -->
                        <h6 class="center-text mtb-30"><button type="submit" class="btn-primaryc plr-25">Send Message</button></h6>
                </div>
                         <?= $this->Form->end() ?>
        </div><!-- container -->
</section>