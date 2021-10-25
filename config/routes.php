<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Inicio', 'action' => 'index']);
    $routes->connect('/home', ['controller' => 'Principal', 'action' => 'index']);
    $routes->connect('/home/products/*', ['controller' => 'Principal', 'action' => 'menu']);
    $routes->connect('/home/about', ['controller' => 'Principal', 'action' => 'informacion']);
    $routes->connect('/home/contact', ['controller' => 'Principal', 'action' => 'contacto']);
    $routes->connect('/home/details/*', ['controller' => 'Principal', 'action' => 'detalle']);
    $routes->connect('/home/cart/*', ['controller' => 'Principal', 'action' => 'carrito']);
    $routes->connect('/home/record/*', ['controller' => 'Principal', 'action' => 'tramites']);
    $routes->connect('/home/profile', ['controller' => 'Principal', 'action' => 'perfil']);
    $routes->connect('/home/buscador', ['controller' => 'Principal', 'action' => 'buscador']);

    $routes->connect('/groups', ['controller' => 'Grupos', 'action' => 'index']);
    $routes->connect('/catalogue', ['controller' => 'Catalogos', 'action' => 'index']);
    $routes->connect('/banks', ['controller' => 'Bancos', 'action' => 'index']);
    $routes->connect('/accounts', ['controller' => 'Cuentas', 'action' => 'index']);
    $routes->connect('/orders', ['controller' => 'Pedidos', 'action' => 'index']);
    $routes->connect('/movements', ['controller' => 'Movimientos', 'action' => 'index']);
    $routes->connect('/customers', ['controller' => 'Clientes', 'action' => 'index']);
    $routes->connect('/messages', ['controller' => 'Mensajes', 'action' => 'index']);

    $routes->fallbacks(DashedRoute::class);
});