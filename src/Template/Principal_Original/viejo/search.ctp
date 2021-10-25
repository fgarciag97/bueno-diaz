<!--<?php if($ajax != 1): ?>

    <h1>Buscar productos</h1>
    <br>
    
        
    </div>

    <br><br>
<?php endif; ?>

<?php if(!empty($search)): ?>

    <?php if(!empty($productos)): ?>
    
    <div class="row">
        
        <?php foreach($productos as $producto): ?>
            <div class="col-sm-3">
                <figure class="Producto">
                    <?php echo $this->Html->image('../productos/productos/photo/' . $producto['photo_dir'] . '/' . $producto['photo'], ['height' => '150'], array('url' => array('controller' => 'principal', 'action' => 'view', $producto['Productos']['id']))); ?>

                    
                </figure>
                <br>
                <?php echo $this->Html->link($producto['denominacion'], array('action' => 'agregarCarrito', $producto['id'])); ?>
                <br>
                 <?php echo $producto['precio'] ;?>
                <br><br>
            </div>
        <?php endforeach; ?>
    </div>
    <br><br><br>
    
    <?php else: ?>
    
    <h3>No se encontró el producto que busca :-( </h3>
    
    <?php endif; ?>

<?php endif; ?>-->

<div class="whole-wrap">
    <div class="container box_1170" style="padding-right: auto; padding-left: auto">
    
        <div class="section-top-border">
            <table class="table table-hover ">
            	<h1 class="mb-30">Busqueda de productos</h1>
            	<hr>
                <tbody>
                    <?php if(!empty($search)): ?>

    				<?php if(!empty($productos)): ?>
    
					    <div class="row">
					        
					        <?php foreach($productos as $producto): ?>
					            <div class="col-sm-2">
					                <figure class="Producto">
					                	<center>
					                    <?php echo $this->Html->image('../productos/productos/photo/' . $producto['photo_dir'] . '/' . $producto['photo'], ['height' => '150'], array('url' => array('controller' => 'principal', 'action' => 'view', $producto['Productos']['id']))); ?>
					                    </center>
					                    
					                </figure>
					                <center>
						                
                                         <h4 class="titulo"><a href="#"><?= $producto["denominacion"] ?></a> </h4>
                                         <h5 class="subtitulo"><?= $producto["descripcion"] ?></h5>
						                 <div class="price">
                                                <ul>
                                                    <li><?= number_format($producto["precio"], 2, ',', '.'); ?> Bs</li>
                                                </ul>
                                            </div>
						                 <h5 class="empresa"><?= $producto["empresa"] ?></h5>

						                 <?php if(@$this->request->session()->read("Auth.User.cedula") == ''  or @$this->request->session()->read("Auth.User.privilegio") == 2){ ?>
						                  <div class="product-ratting">
                                           <?= $this->Form->postLink('Agregar a Carrito', ['action' => 'agregarCarrito', $producto["id"], 1], ['confirm' => '¿Desea añadirlo al Carrito?', "class" => "genric-btn success circle"]); ?>
                                          </div>
                                          <?php } ?>
					                 </center>
					                <br><br>
					            </div>
					        <?php endforeach; ?>
					    </div>
    					<br><br><br>
    
					    <?php else: ?>
					    
					    <h3>No se encontró el producto que busca.</h3>
					    
					    <?php endif; ?>

					<?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>