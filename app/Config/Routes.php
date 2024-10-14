<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(true);
