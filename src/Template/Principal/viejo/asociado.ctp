
<br>

        <!-- Latest Products Start -->
        <section class="latest-product-area">
            <div class="container">
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h4 class="principal"><?= @$empresa ?></h4>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="properties__button f-right">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="todos" data-toggle="tab" href="#todo" role="tab" aria-controls="todo" aria-selected="true">Todos</a>
                                    <?php foreach ($grupos as $key) { ?>
                                        <a class="nav-item nav-link" id="<?= "s".$key['id']."s" ?>" data-toggle="tab" href="#<?= "s".$key['id'] ?>" role="tab" aria-controls="<?= "s".$key['id'] ?>" aria-selected="false"> <?= $key['denominacion'] ?> </a>
                                    <?php } ?>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="todo" role="tabpanel" aria-labelledby="todos">
                        <div class="row">
                            
                            <?php foreach ($productos as $key) { ?>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="single-product mb-60">
                                        <div class="product-img">
                                            <?= $this->Html->image('../productos/productos/photo/'.$key["photo_dir"].'/'.$key["photo"], ['height' => '250', 'width' => '300']) ?>
                                            <div class="new-product">
                                                <span>Nuevo</span>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="titulo"><a href="#"><?= $key["denominacion"] ?></a> </h4>
                                            <h5 class="subtitulo"><?= $key["descripcion"] ?></h5>
                                            <div class="price">
                                                <ul>
                                                    <li><?= number_format($key["precio"], 2, ',', '.'); ?> Bs</li>
                                                </ul>
                                            </div>
                                            <h5 class="empresa"><?= $key["empresa"] ?></h5>
                                            <?php if(@$this->request->session()->read("Auth.User.cedula") == ''  or @$this->request->session()->read("Auth.User.privilegio") == 2){ ?>
                                                <div class="product-ratting">
                                                    <?= $this->Form->postLink('Agregar a Carrito', ['action' => 'agregarCarrito', $key["id"], 2], ['confirm' => '¿Desea añadirlo al Carrito?', "class" => "genric-btn success circle"]); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    
                    <?php $id = 0; ?>

                    <?php foreach ($grupos as $grupo) { 

                        if($grupo['id'] != $id){
                            $id = $grupo['id'];
                            $n = 0;
                        }

                    ?>

                        <!-- Card two -->
                        <div class="tab-pane fade" id="<?= "s".$grupo['id'] ?>" role="tabpanel" aria-labelledby="<?= "s".$grupo['id']."s" ?>">
                            <div class="row">
                                
                                <?php foreach ($productos as $key) { ?>

                                    <?php if($grupo['id'] == $key['id_grupo'] and $n < 12) { ?>

                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="single-product mb-60">
                                                <div class="product-img">
                                                    <?= $this->Html->image('../productos/productos/photo/'.$key["photo_dir"].'/'.$key["photo"], ['height' => '250', 'width' => '300']) ?>
                                                    <div class="new-product">
                                                        <span>Nuevo</span>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <h4 class="titulo"><a href="#"><?= $key["denominacion"] ?></a> </h4>
                                                    <h5 class="subtitulo"><?= $key["descripcion"] ?></h5>
                                                    <div class="price">
                                                        <ul>
                                                            <li><?= number_format($key["precio"], 2, ',', '.'); ?> Bs</li>
                                                        </ul>
                                                    </div>
                                                    <h5 class="empresa"><?= $key["empresa"] ?></h5>
                                                    <div class="product-ratting">
                                                        <?= $this->Form->postLink('Agregar a Carrito', ['action' => 'agregarCarrito', $key["id"], 2], ['confirm' => '¿Desea añadirlo al Carrito?', "class" => "genric-btn success circle"]); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php $n++; } } ?>

                            </div>
                        </div>
                   <?php } ?>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
