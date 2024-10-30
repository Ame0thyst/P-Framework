<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'ImageController::index');
$routes->get('/images/create', 'ImageController::create');
$routes->post('/images/store', 'ImageController::store');
$routes->get('/images/delete/(:num)', 'ImageController::delete/$1');
$routes->get('/images/edit/(:num)', 'ImageController::edit/$1');
$routes->post('/images/update/(:num)', 'ImageController::update/$1');
