<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/shop', 'ShopController::getAllBarang');
$routes->get('/cart', 'CartController::index');
$routes->get('/cart/add/(:num)', 'CartController::addToCart/$1');
$routes->get('/cart/delete/(:num)', 'CartController::deleteFromCart/$1');
$routes->get('/cart/tambah-barang/(:num)', 'CartController::tambahBarang/$1');
$routes->get('/cart/kurangi-barang/(:num)', 'CartController::kurangiBarang/$1');
$routes->get('/checkout', 'CheckoutController::index');
$routes->post('/checkout/placeOrder', 'CheckoutController::placeOrder');
$routes->get('/checkout/success', 'CheckoutController::success');
