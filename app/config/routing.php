<?php

use Controller\Order\CheckoutOrderController;
use Controller\Order\InfoOrderController;
use Controller\Main\IndexController;
use Controller\Product\ListProductController;
use Controller\Product\InfoProductController;
use Controller\User\AuthenticationUserController;
use Controller\User\LogoutUserController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add(
    'index',
    new Route('/', ['_controller' => [IndexController::class, 'action']])
);

$routes->add(
    'product_list',
    new Route('/product/list', ['_controller' => [ListProductController::class, 'action']])
);
$routes->add(
    'product_info',
    new Route('/product/info/{id}', ['_controller' => [InfoOrderController::class, 'action']])
);

$routes->add(
    'order_info',
    new Route('/order/info', ['_controller' => [InfoOrderController::class, 'action']])
);
$routes->add(
    'order_checkout',
    new Route('/order/checkout', ['_controller' => [CheckoutOrderController::class, 'action']])
);

$routes->add(
    'user_authentication',
    new Route('/user/authentication', ['_controller' => [AuthenticationUserController::class, 'action']])
);
$routes->add(
    'logout',
    new Route('/user/logout', ['_controller' => [LogoutUserController::class, 'action']])
);

return $routes;
