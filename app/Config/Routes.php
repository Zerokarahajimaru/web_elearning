<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Get_Mahasiswa::loginForm');
// $routes->get('/','GetMhs::landingPage');
$routes->get('dashboard_mahasiswa','Get_Mahasiswa::getDashboard', ['filter' => 'authgokil:mahasiswa']);
$routes->get('mahasiswa', 'Get_Mahasiswa::getallmahasiswa', ['filter' => 'authgokil:mahasiswa']);
$routes->get('mahasiswa/detail/(:num)','Get_Mahasiswa::getmhsspecificnim/$1', ['filter' => 'authgokil:mahasiswa']);


//untuk mengambil password
$routes->post('auth','Post_User::compare');
// $routes->get('auth',/*masukan class untuk*/)

$routes->get('dashboard_admin','Get_Mahasiswa::getadmindashboard',['filter' => 'authgokil:dosen']);


$routes->get('dashboard_mahasiswa/course','Get_Mahasiswa::mahasiswaCourse', ['filter' => 'authgokil:mahasiswa']);

$routes->get('dashboard_mahasiswa/course/(:alphanum)','Get_Mahasiswa::getSpecificCourse/$1');

//mengirim data enrollment keys
$routes->post('dashboard_mahasiswa/course/(:any)','Post_Course::compare_course_credits/$1');
// $routes

$routes->post('dashboard_admin/delete','Post_Admin::compare_delete');

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboard_mahasiswa','Get_Mahasiswa::getDashboard');
    $routes->get('dashboard_admin','Get_Mahasiswa::getadmindashboard');
});

$routes->get('superadmin','SuperAdmin::index', ['filter' => 'auth:admin']);

?>