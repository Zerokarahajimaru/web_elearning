<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','GetMhs::landingPage');
$routes->get('mahasiswa', 'GetMhs::getallmahasiswa');
$routes->get('mahasiswa/detail/(:num)', 'GetMhs::getmhsspecificnim/$1');

?>