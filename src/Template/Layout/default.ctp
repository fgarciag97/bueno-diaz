<?php $cakeDescription = 'Bueno & Diaz Services Corp'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css(['styles', 'dataTables.bootstrap4.min']) ?>
        <?= $this->Html->script(['all.min']) ?>

        <?= $this->fetch('script') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

        <script type="text/javascript">
            setTimeout(function() {
                   $('.alert').fadeOut('slow');
            }, 2000); // <-- time in milliseconds
        </script>
    </head>
    <body class="sb-nav-fixed">

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <?= $this->html->link('Bueno & Diaz', ['controller' => 'Inicio', 'action' => 'index'], ["class" => "navbar-brand"]) ?>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <!--<div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>-->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                        <?= @$this->request->session()->read("Auth.User.nombres") . " " . @$this->request->session()->read("Auth.User.apellidos") ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!--<div class="dropdown-divider"></div>-->
                         <?= $this->html->link('Sign off', ['controller' => 'Principal', 'action' => 'logout'], ["class" => "dropdown-item"]) ?>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>

                            <!------------------------------------------------------------------------------->
                            <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-home"></i></div> Home', ['controller' => 'Inicio', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                            <!------------------------------------------------------------------------------->
                            <div class="sb-sidenav-menu-heading">Principal</div>
                 
                            <!------------------------------------------------------------------------------->

                            <!--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Administracion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>-->
                            <!------------------------------------------------------------------------------->


                            <!--<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Comercio
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">

                                        	<?= $this->html->link('Bank Accounts', ['controller' => 'Cuentas', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                        	<?= $this->html->link('Catalago', ['controller' => 'Catalogos', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                        	

                                        	<?= $this->html->link('Pedidos', ['controller' => 'Cuentas', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                        	

                                        	</nav>
                                    </div>






                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Utilidad
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        	
                                        	<?= $this->html->link('Categorias', ['controller' => 'Grupos', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                        	<?= $this->html->link('Mensaje de Promocion', ['controller' => 'Promocion', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>
                                        </nav>
                                    </div>
                                </nav>
                            </div>-->

                            


                            <!-------------------------------------------------------------------------------------------->

                         
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-cash-register"></i></div>
                                Commerce
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>



                                 <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">    
                                    
                                    <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div> Categories', ['controller' => 'Grupos', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                    <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div> Subcategories', ['controller' => 'Grupos', 'action' => 'sub'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                    <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div> Catalogue', ['controller' => 'Catalogos', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                     <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-bars"></i></div> Banks', ['controller' => 'Bancos', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                    
                                    <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div> Bank Accounts', ['controller' => 'Cuentas', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                    <!--<?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div> Tasa de cambio', ['controller' => 'Tasa', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>-->

                                </nav>
                            </div>

                            <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div> Orders', ['controller' => 'Pedidos', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                            <!-- <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-clipboard"></i></div>Movements', ['controller' => 'Movimientos', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?> -->


                         <!-------------------------------------------------------------------------------------------->

                         <div class="sb-sidenav-menu-heading">Administration</div>

                         
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>



                                 <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">	
                                	
                                	<?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-user"></i></div> Administrators', ['controller' => 'Usuarios', 'action' => 'admin'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>
                                	
                                	<?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-user"></i></div> Customers', ['controller' => 'Usuarios', 'action' => 'clientes'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>

                                </nav>
                            </div>



                            <!-------------------------------------------------------------------------------------------->









                            <div class="sb-sidenav-menu-heading">Additional</div>

                                <?= $this->html->link('<div class="sb-nav-link-icon"><i class="fas fa-fw fa-envelope"></i></div>Contacts', ['controller' => 'Mensajes', 'action' => 'index'], ["class" => "nav-link", 'tabindex' => '-1','escape' => false]) ?>


                                



                            <!------------------------------------------------------------------------------->

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Welcome to the</div>
                        Administration
                    </div>
                </nav>
            </div>




            <div id="layoutSidenav_content">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <?= date('Y') ?>. All rights reserved </div>
                            <div>
                                Contact: 
                                &middot;
                                <a href="https://gmail.com" target="_blank"> dorsi.programacion@gmail.com </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <?= $this->Html->script(['jquery-3.4.1.min', 'bootstrap.bundle.min', 'scripts', 'Chart.min', 'jquery.dataTables.min', 'dataTables.bootstrap4.min', 'datatables-demo','funciones', 'moneda']) ?>
        <?= $this->fetch('script') ?>
    </body>
</html>
