<section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white">

                                <h5><b style="font-family: cursive;">TU PEDIDO AL DIA</b></h5>
                                <h1 class="mt-30 mb-15" style="font-family: cursive;">Restaurante</h1>
                                <h5><a href="#" data-toggle='modal' data-target='#login' class="btn-primaryc plr-25"><b>Iniciar Sesión</b></a></h5>
                        </div>
                </div>
        </div>
</section>


<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="img/heading_logo.png" alt="">
                        <h2 style="font-family: cursive;">Historia</h2>
                        <br>
                        <h5><?= $this->html->link('Ver Informacion', ['controller' => 'Principal', 'action' => 'informacion'], ['class' => 'btn-primaryc plr-25']); ?></a></h5>
                </div>

                <div class="row">
                        <div class="col-md-6">
                                <p class="mb-30" style="text-align: justify;">
                                Un día TuPedidoAlDia citó a su amigo para comentarle que quería abrir un restaurante, una de esas asignaturas pendientes. Para ello necesitaba un socio en el que confiase ciegamente y allí en un sofá de su casa, se empezó a forjar la idea. No tardaron en empezar a hablar de sus ideas, la comida, e hicieron un recorrido por los mejores restaurantes de Coro y llegaron a una conclusión: no hay restaurantes que traten su servicio desde un una pagina web para asi hacer su pedido y enviarlo a su debido lugar.
                            </p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <p class="mb-30" style="text-align: justify;">
                                 Un día TuPedidoAlDia citó a su amigo para comentarle que quería abrir un restaurante, una de esas asignaturas pendientes. Para ello necesitaba un socio en el que confiase ciegamente y allí en un sofá de su casa, se empezó a forjar la idea. No tardaron en empezar a hablar de sus ideas, la comida, e hicieron un recorrido por los mejores restaurantes de Coro y llegaron a una conclusión: no hay restaurantes que traten su servicio desde un una pagina web para asi hacer su pedido y enviarlo a su debido lugar.
                                </p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->
        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="img/heading_logo.png" alt="">
                        <h2 style="font-family: cursive;">Lo Más Vendido</h2>
                </div>

                <div class="row">

                        <!--<h6 class="ribbon-cont"><div class="ribbon primary"></div><b>OFFER</b></h6>
                        <h6  class="ribbon-cont"><div class="ribbon secondary"></div><b>SPECIALITY</b></h6>
                        <h6 class="ribbon-cont color-black"><div class="ribbon white"></div><b>PLUS SIZE</b></h6>-->

                        <?php foreach ($mas_vendido as $key) { ?>

                            <div class="col-lg-3 col-md-4  col-sm-6 ">
                                    <div class="center-text mb-30">
                                            <div class="ïmg-200x mlr-auto pos-relative">
                                                <h6 class="ribbon-cont"><div class="ribbon primary"></div><b> <?= $key['grupo'] ?> </b></h6>
                                                <?= $this->Html->image('../productos/productos/photo/'.$key['photo_dir'].'/'.$key['photo']) ?>
                                            </div>
                                            <h5 class="mt-20"> <strong> <?= $key['denominacion'] ?> </strong></h5>

                                             <button data-toggle="collapse" style="color: red" data-target="#<?= $key['id'] ?>">Detalles</button>

                                            <div id="<?= $key['id'] ?>" class="collapse">
                                                <?= $key['descripcion'] ?>
                                            </div> 




                                            <h5 class="mt-5"><b> $ <?= number_format($key['precio'], 2, ',', '.') ?></b></h5>
                                            <h5 class="mt-5"><b> <?= number_format($key['precio_bs'], 2, ',', '.') ?> Bs</b></h5>
                                            <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                                    </div>
                            </div>

                        <?php } ?>
                </div>
        </div>
</section>


<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="img/heading_logo.png" alt="">
                        <h2 style="font-family: cursive;">Menu</h2>
                </div>

                <div class="row">
                        <div class="col-sm-12">
                                <ul class="selecton brdr-b-primary mb-70">
                                        <li><a class="active" href="#" data-select="*"><b>TODO</b></a></li>
                                         <?php foreach ($grupos as $key) { ?>
                                        <li><a href="#" data-select="<?=$key['id'] ?>"><b><?=$key['denominacion'] ?></b></a></li>
                                    	<?php } ?>
                                </ul>
                        </div>
                </div>

                <div class="row">
 						<?php foreach (@$menu as $key) { ?>
                        <div class="col-md-6 food-menu <?=$key['id'] ?>">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left">

                                        <?= $this->Html->image('../productos/productos/photo/'.$key["photo_dir"].'/'.$key["photo"], ['height' => '100']) ?>

                                        </div>
                                        <div class="s-right">

                                                <h5 class="mb-10">
                                                <?= $this->html->link($key['denominacion'], ['controller' => 'Principal', 'action' => 'index']) ?>

                                                <b class="color-primary float-right">
                                                 <?= number_format($key["precio"], 2, ',', '.'); ?></b></h5>

                                                <p class="pr-70"><?= $this->html->link($key['descripcion'], ['controller' => 'Principal', 'action' => 'index']) ?></p>
                                        </div>
                                </div>
                        </div>
 						<?php } ?>                       
                </div>

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><?= $this->html->link('Ver Menu', ['controller' => 'Principal', 'action' => 'menu'], ['class' => 'btn-primaryc plr-25']); ?></a></h5>
        </div>
</section>