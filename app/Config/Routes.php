<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'Profil::index');
$routes->get('/layanan', 'Profil::layanan');
$routes->get('/dokter', 'Profil::dokter');
$routes->get('/kontak', 'Profil::kontak');
