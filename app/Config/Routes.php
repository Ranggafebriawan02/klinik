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

$routes->get('/daftar', 'Pendaftaran::index');

$routes->get('pendaftaran', 'Pendaftaran::index');
$routes->post('pendaftaran/simpan', 'Pendaftaran::simpan');
$routes->get('pendaftaran/sukses', 'Pendaftaran::sukses');
