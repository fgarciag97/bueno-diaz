<!--MENU PARA TELEFONO-->
<link href="../fonts/ionicons.css" rel="stylesheet">

<section class="bg-7 h-500x main-slider pos-relative" style="background-image: url(../img/libro.jpg);">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h2 class="mt-30 mb-15" style="font-family: initial;">About Us</h2>
                                
                                <?php if(@$this->request->session()->read("Auth.User.cedula") == ''){ ?>
                                        <!--<h5><a href="#" data-toggle='modal' data-target='#login' class="btn-primaryc plr-25"><b>LOGIN</b></a></h5>-->
                                <?php } ?>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="row">
                        <div class="col-md-7 col-lg-8">

                                <div class="mb-50 mb-sm-30">
                                        <div class="pos-relative mb-30">
                                                <!--<div class="font-8 abs-tl p-20 bg-primary color-white">
                                                        <h4><b>26</b></h4>
                                                        <h4><b>05</b></h4>
                                                        <h4><b>18</b></h4>
                                                        <div class="brdr-style-1"></div>
                                                </div>-->
                                                <?= $this->html->image('imagen1.jpg'); ?>
                                        </div>
                                        <h4><a><b>Bueno & Diaz Services Corp</b></a></h4>

                                        <p class="mt-30" style="text-align: justify;">
                                                We are Distributors of consumer products, Cleaning, desingfectants, household, office products, industrial products, computing, and CCTV
                                        </p>
                                </div><!--mb-30-->

                                <div class="mb-50 mb-sm-30">
                                        <div class="pos-relative mb-30 pt-15">
                                                <!--<div class="font-8 abs-tl p-20 bg-primary color-white">
                                                        <h4><b>26</b></h4>
                                                        <h4><b>05</b></h4>
                                                        <h4><b>18</b></h4>
                                                        <div class="brdr-style-1"></div>
                                                </div>-->
                                                <?= $this->html->image('imagen3.jpg'); ?>
                                        </div>
                                        <h4><a><b>Computer products.</b></a></h4>
                                        <!--<h6 class="mt-10 bg-lite-blue dplay-inl-block">
                                                <a class="plr-20 mtb-10" href="#"><b>By Admin</b></a>
                                                <a class="plr-20 mtb-10 brder-lr-lite-black-2" href="#"><b>in Recipes</b></a>
                                                <a class="plr-20 mtb-10" href="#"><b>3 Comments</b></a>
                                        </h6>-->
                                        <p class="mt-30" style="text-align: justify;">
                                        <!--Para la salsa boloñesa, con ayuda de tu procesador Braun® MultiQuick 7, pica la carne en trozos muy pequeños. Reserva.Repite con la cebolla, las zanahorias y el apio hasta obtener las verduras finamente picadas.En una sartén profundo calienta el aceite con la mantequilla, cocina la carne picada hasta que esté cocida y agrega la cebolla, el apio y la zanahoria. Cocina unos minutos.Agrega el puré de tomate y cocina unos minutos. Añade el vino y deja que reduzca, después el jitomate, el caldo y las especias. Reduce el fuego y cocina alrededor de 20 a 30 minutos hasta que se reduzca la mayor parte del líquido, pero no se seque por completo. Sazona.Cocina la pasta en agua hirviendo con sal hasta que esté “al dente” o en su punto. Escurre.Sirve la pasta con la salsa y termina con queso parmesano y orégano.-->
                                </p>
                                </div><!--mb-30-->

                                <div class="mb-50 mb-sm-30">
                                        <div class="pos-relative mb-30 pt-15">
                                                <!--<div class="font-8 abs-tl p-20 bg-primary color-white">
                                                        <h4><b>26</b></h4>
                                                        <h4><b>05</b></h4>
                                                        <h4><b>18</b></h4>
                                                        <div class="brdr-style-1"></div>
                                                </div>
                                                <?= $this->html->image('blog-3-1000x400.jpg'); ?>-->
                                        </div>
                                        <!--<h4><a href="#"><b>Descuentos semanales</b></a></h4>
                                        <h6 class="mt-10 bg-lite-blue dplay-inl-block">
                                                <a class="plr-20 mtb-10" href="#"><b>By Admin</b></a>
                                                <a class="plr-20 mtb-10 brder-lr-lite-black-2" href="#"><b>in Recipes</b></a>
                                                <a class="plr-20 mtb-10" href="#"><b>3 Comments</b></a>
                                        </h6>
                                        <p class="mt-30">Proin dictum viverra varius. Etiam vulputate libero dui, at pretium elit
                                                elementum quis. Enean porttitor eros non ultrices convallis. Vivamus quis dolor ut arcu lobortis finibus a vitae leo.
                                                Sed eget tempus sem. Nullam sed lacus sed metus tincidunt lobortis lobortis at nibh. Morbi euismod, arcu in gravida rhoncus</p>-->
                                </div>

                        </div><!--col-md-8-->

                        <div class="col-md-5 col-lg-4">
                                <div class="mx-w-400x mlr-auto">
                                        <div class="mb-50 mb-sm-30 pos-relative oflow-hidden">
                                                <div class="bg-trinagle-primary" style="background: #333"></div>
                                                <?= $this->html->image('imagen2.jpg'); ?>
                                                <div class="abs-bl font-18 color-white p-30 z-1">
                                                        <h4 class="lh-1"></h4>
                                                        <h4 class="lh-1">Cleaning products</h4>
                                                        <h4 class="lh-1"> </h4>
                                                        <!--<h6 class="font-5 mt-10">Combo Pack <b>Pizza + Salad</b></h6>-->
                                                </div>
                                        </div><!--mb-50-->

                                        <div class="mb-50 mb-sm-30">
                                                <h5 class="mb-30 left-text"><b>Our products are selected by trained personnel to offer the best quality</b></h5>
                                        </div><!--mb-50-->

                                        <div class="mb-30 pos-relative">
                                                <?= $this->html->image('imagen4.jpg'); ?>
                                                <div class="font-23  ptb-15 abs-tlr-30 color-white center-text brdr-primary-3" style="border: 3px solid #f0f4ff">
                                                        <div class="abs-tblr bg-black opacty-6 z--1"></div>
                                                        <h4><b>1 + 1</b></h4>
                                                        <h6 class="font-5 pb-15"><b>The best security team</b></h6>
                                                </div>
                                        </div><!--mb-50-->

                                </div><!--mx-w-500x-->
                        </div><!--col-md-4-->
                </div><!-- row -->
        </div><!-- container -->
</section>