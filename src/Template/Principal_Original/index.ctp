<!--MENU PARA TELEFONO-->
<link href="fonts/ionicons.css" rel="stylesheet">

<section class="bg-1 h-900x pos-relative" style="background-image: url(img/principal.jpg);">
    <div class="triangle-up pos-bottom"></div>
    <div class="container h-100">
        <div class="dplay-tbl">
            <div class="dplay-tbl-cell center-text color-white">

                <h5><b style="font-family: initial; color: black">Bueno & Diaz Services Corp</b></h5>
                <h1 class="mt-30 mb-15" style="font-family: initial; color: black; text-shadow: 2px 1px 1px #dadada">Online store</h1>
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


<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none" style="background-image: url(img/izquierda.png);"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none" style="background-image: url(img/derecha.png);"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="img/heading_logo.png" style="width: 60px">
                        <h2 style="font-family: initial;">History</h2>
                        <br>
                        <h5><?= $this->html->link('See information', ['controller' => 'Principal', 'action' => 'informacion'], ['class' => 'btn-primaryc plr-25']); ?></a></h5>
                </div>
                <center>
                <div class="row">
                            <p class="col-md-8" style="text-align: center; margin-top: -5%; margin-left: 16%; font-family: initial">
                               We are Distributors of consumer products, Cleaning, desingfectants, household, office products, industrial products, computing, and CCTV
                            </p>
                </div>
            </center>
        </div>
</section>

<!--
<section class="story-area bg-seller color-white pos-relative" style="background-image: url(img/principal2.jpg);">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="img/heading_logo.png" style="width: 60px">
                        <h2 style="font-family: cursive;">The most sold</h2>
                </div>

                <div class="row">

                        <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>OFFER</b></h6>
                        <h6  class="ribbon-cont"><div class="ribbon secondary"></div><b>SPECIALITY</b></h6>
                        <h6 class="ribbon-cont color-black"><div class="ribbon white"></div><b>PLUS SIZE</b></h6>

                        <?php foreach ($mas_vendido as $key) { ?>

                            <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                    <div class="ïmg-200x mlr-auto pos-relative">
                                        <h6 class="ribbon-cont"><div class="ribbon primary"></div><b> <?= $key['grupo'] ?> </b></h6>
                                        <?= $this->Html->image('../productos/productos/photo/'.$key['photo_dir'].'/'.$key['photo']) ?>
                                    </div>
                                    <h5 class="mt-20"> <strong> <?= $key['denominacion'] ?> </strong></h5>

                                     <button data-toggle="collapse" style="color: red" data-target="#<?= $key['id'] ?>">Details</button>

                                    <div id="<?= $key['id'] ?>" class="collapse">
                                        <?= $key['descripcion'] ?>
                                    </div> 


                                    <h5 class="mt-5"><b> $ <?= number_format($key['precio'], 2, ',', '.') ?></b></h5>
                                  <h5 class="mt-5"><b> <?= number_format($key['precio_bs'], 2, ',', '.') ?> Bs</b></h5>
                                    <?php if(@$this->request->session()->read("Auth.User.cedula") != ''){ ?>
                                        <h6 class="mt-20">
                                            <?= $this->Form->postLink('To Buy', ['action' => 'agregarCarrito', $key["id"], 1], ['confirm' => '¿Desea añadirlo al Carrito?', "class" => "btn-brdr-primary plr-15"]); ?>
                                        </h6>
                                    <?php } ?>
                                </div>
                            </div>

                        <?php } ?>
                </div>
        </div>
</section>


<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="img/heading_logo.png" style="width: 60px">
                        <h2 style="font-family: cursive;">PRODUCTS</h2>
                </div>

                <div class="row">
                        <div class="col-sm-12">
                                <ul class="selecton brdr-b-primary mb-70">
                                        
                                        <li>
                                            <a class="active" href="#" data-select="*">
                                                <b>EVERYTHING</b>
                                            </a>
                                        </li>
                                    
                                    <?php foreach ($grupos as $key) { ?>
                                        <li>
                                            <a href="#" data-select="<?=$key['id'] ?>">
                                                <b><?=$key['denominacion'] ?></b>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                        </div>
                </div>

                <div class="row">

                    <?php foreach ($productos as $key) { ?>
                        <div class="col-md-6 food-menu <?=$key['id_grupo'] ?>">
                            <div class="sided-90x mb-30 ">
                                <div class="s-left">
                                    <?= $this->Html->image('../productos/productos/photo/'.$key['photo_dir'].'/'.$key['photo']) ?>
                                </div>
                                <div class="s-right">
                                        <h5 class="mb-10">
                                            <b><?=$key['denominacion'] ?></b>
                                            <b class="color-primary float-right"> $ <?= number_format($key['precio'], 2, ',', '.') ?> </b>
                                            <br>
                                          <b class="color-primary float-right"> <?= number_format($key['precio_bs'], 2, ',', '.') ?> Bs </b>
                                        </h5>
                                        <p class="pr-70"><?=$key['descripcion'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div> row 

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><?= $this->html->link('See more', ['controller' => 'Principal', 'action' => 'menu'], ['class' => 'btn-primaryc plr-25']); ?></a></h5>
        </div>
</section>
-->