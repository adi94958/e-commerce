<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/create', 'Home::create');
$routes->get('/read', 'Home::read');
$routes->get('/destroy', 'Home::destroy');
