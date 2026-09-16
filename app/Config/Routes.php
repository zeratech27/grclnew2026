<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index2');
$routes->get('/', 'Home::dashboard');

// menu admin:
$routes->get('admin/jadwal', 'Admin::index');
$routes->get('admin/murid', 'Admin::murid');
$routes->get('admin/guru', 'Admin::guru');
$routes->get('admin/inputguru', 'Admin::input_guru');
$routes->post('admin/simpanform', 'Admin::storedata_guru');
// menu user
$routes->get('/jadwal', 'Home::jadwal');
$routes->get('/absensi', 'Home::absensi');
