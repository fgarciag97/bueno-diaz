<!--MENU PARA TELEFONO-->
<link href="../fonts/ionicons.css" rel="stylesheet">

<section class="bg-5 h-500x main-slider pos-relative"  style="background-image: url(../img/producto.jpg);">
    <div class="triangle-up pos-bottom"></div>
    <div class="container h-100">
        <div class="dplay-tbl">
            <div class="dplay-tbl-cell center-text color-white pt-90">
                    <h2 class="mt-30 mb-15" style="font-family: initial;">Products</h2>


                        <?php foreach ($grupos as $key) { ?>

                             <a style="font-size: 2em; padding: 15px" href="#<?= $key['id'] ?>" style="font-family: initial;"><?= $key['denominacion']?></a>

                        <?php } ?>


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


<!--<section class="story-area left-text center-sm-text">
    <div class="container">
        <div class="heading"><h3 style="font-family: initial;">The most sold</h3></div>
        <div class="row">

            <?php foreach ($mas_vendido as $key) { ?>
                    
                <div class="col-lg-3 col-md-4  col-sm-6 ">
                    <div class="center-text mb-30">
                        <div class="ïmg-200x mlr-auto pos-relative">
                            <h6 class="ribbon-cont color-white"><div class="ribbon primary"></div><b><?= $key['grupo'] ?></b></h6>
                            <?= $this->Html->image('../productos/productos/photo/'.$key['photo_dir'].'/'.$key['photo']) ?>
                        </div>
                       <h5 class="mt-20">Pizza</h5>
                        <h5 class="mt-5 color-primary" style="font-family: initial;"><b><?= $key['denominacion'] ?></b></h5>
                        <p class="mt-5"><b><?= $key['descripcion'] ?></b></p>
                        <?php if(@$this->request->session()->read("Auth.User.cedula") != ''){ ?>
                            <h6 class="mt-20">
                                <?= $this->Form->postLink('To buy', ['action' => 'agregarCarrito', $key["id"], 2], ['confirm' => 'You want to add it to the Cart?', "class" => "btn-brdr-primary plr-15"]); ?>
                            </h6>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>


<section class="story-area bg-seller color-white pos-relative" style="background-image: url(../img/producto.jpg);">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <h4 class="font-30 font-sm-20  center-text mb-25">The best <strong>customer</strong> service</h4>
        </div>
</section>-->


<?php foreach (@$grupos as $key) { ?>
    <?php if($key['cantidad'] != 0) { ?>
        <section class="story-area left-text center-sm-text" id="<?= $key['id'] ?>">
            <div class="container">
                <div class="heading"><h3 style="font-family: initial;"><?= $key['denominacion'] ?></h3></div>
                <div class="row">
                    <?php foreach (@$productos as $key2) { ?>
                        <?php if($key['id'] == $key2['id_grupo']) { ?>
                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                            <div class="center-text mb-30">
                                <div class="ïmg-200x mlr-auto pos-relative">
                                    <!--<h6 class="ribbon-cont color-white"><div class="ribbon primary"></div><b><?= $key2['grupo'] ?></b></h6>-->
                                    <h6 class="ribbon-cont color-white"><div class="ribbon primary"></div>
                                            <?= $this->html->link('See', ['controller' => 'Principal', 'action' => 'Detalle', $key2['id']]) ?>
                                    </h6>
                                     <?= $this->Html->image('../productos/productos/photo/'.$key2["photo_dir"].'/'.$key2["photo"], ['height' => '100']) ?>
                                </div>
                                <!--<h5 class="mt-20">Pizza</h5>-->
                                <h5 class="mt-5 color-primary" style="font-family: initial;"><b><?= $key2['denominacion'] ?></b></h5>
                                <p class="mt-5"><b><?= $key2['descripcion'] ?></b></p>
                                <p class="mt-5"><b>$ <?= number_format($key2["precio"], 2, ',', '.'); ?></b></p>
                                <?php if(@$this->request->session()->read("Auth.User.cedula") != ''){ ?>
                                    <h6 class="mt-20">
                                        <?= $this->Form->postLink('To buy', ['action' => 'agregarCarrito', $key2["id"], 2], ['confirm' => 'You want to add it to the Cart?', "class" => "btn-brdr-primary plr-15"]); ?>
                                    </h6>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?> 
                </div>
            </div>
        </section>
        <hr style="    margin-top: 0rem; margin-bottom: 0rem; border: 0; border-top: 4px solid black;">
    <?php } ?>
<?php } ?>


<!--
<?php foreach (@$grupos as $key) { ?>
    <?php if($key['cantidad'] != 0) { ?>
        <section class="bg-lite-blue" id="<?= $key['id'] ?>">
            <div class="container">
                <div class="heading"><h3 style="font-family: initial;"><?= $key['denominacion'] ?> </h3></div>
                <div class="row">
                    <?php foreach (@$productos as $key2) { ?>
                        <?php if($key['id'] == $key2['id_grupo']) { ?>
                            <div class="col-md-6">
                                <div class="sided-90x mb-30 ">
                                    <div class="s-left">
                                     <?= $this->Html->image('../productos/productos/photo/'.$key2["photo_dir"].'/'.$key2["photo"], ['height' => '100']) ?>
                                            
                                    </div>
                                    <div class="s-right">
                                            <h5 class="mb-10">
                                                <?= $key2['denominacion'] ?>

                                                <b class="color-primary float-right">
                                                 <?= number_format($key2["precio_bs"], 2, ',', '.'); ?> Bs
                                                </b>

                                                <br>

                                                <b class="color-primary float-right">
                                                 $ <?= number_format($key2["precio"], 2, ',', '.'); ?>
                                                     
                                                </b>
                                                
                                             </h5>

                                            <p class="pr-70"><?= $key2['descripcion'] ?></p>

                                            <h6 class="mt-20">
                                                <?php if(@$this->request->session()->read("Auth.User.cedula") != ''){ ?>
                                                    <h6 class="mt-20">
                                                        <?= $this->Form->postLink('To buy', ['action' => 'agregarCarrito', $key2["id"], 2], ['confirm' => 'You want to add it to the Cart?', "class" => "btn-brdr-primary plr-25 float-right"]); ?>
                                                    </h6>
                                                <?php } ?>
                                            </h6>
                                            <br>
                                            <br>
                                    </div>
                                </div>
                            </div>
                        <?php } ?> 
                    <?php } ?> 
                </div>
            </div>
        </section>

        <hr style="    margin-top: 0rem; margin-bottom: 0rem; border: 0; border-top: 4px solid #cc6a00;">
    <?php } ?>
<?php } ?>-->