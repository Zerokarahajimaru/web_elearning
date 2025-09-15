<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Get_Mahasiswa::loginForm');
// $routes->get('/','GetMhs::landingPage');
$routes->get('dashboard_mahasiswa','Get_Mahasiswa::getDashboard');
$routes->get('mahasiswa', 'Get_Mahasiswa::getallmahasiswa');
$routes->get('mahasiswa/detail/(:num)','Get_Mahasiswa::getmhsspecificnim/$1');


//untuk mengambil password
$routes->post('auth','Post_User::compare');
// $routes->get('auth',/*masukan class untuk*/)

$routes->get('dashboard_admin','Get_Mahasiswa::getadmindashboard');

// $routes
?>