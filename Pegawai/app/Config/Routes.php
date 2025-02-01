<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/jabatan', 'JabatanController::index');
$routes->get('/jabatan/show/(:num)', 'JabatanController::show/$1');
$routes->get('/jabatan/create', 'JabatanController::create');
$routes->post('/jabatan/store', 'JabatanController::store');
$routes->get('/jabatan/edit/(:num)', 'JabatanController::edit/$1');
$routes->post('/jabatan/update/(:any)', 'JabatanController::update/$1');
$routes->post('/jabatan/delete/(:num)', 'JabatanController::delete/$1');

$routes->get('/pegawai', 'pegawaiController::index');
$routes->get('/pegawai/show/(:num)', 'pegawaiController::show/$1');
$routes->get('/pegawai/create', 'pegawaiController::create');
$routes->post('/pegawai/store', 'pegawaiController::store');
$routes->get('/pegawai/edit/(:num)', 'pegawaiController::edit/$1');
$routes->post('/pegawai/update/(:any)', 'pegawaiController::update/$1');
$routes->post('/pegawai/delete/(:num)', 'pegawaiController::delete/$1');
