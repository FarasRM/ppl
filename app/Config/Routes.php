<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Barang::display');
$routes->get('barang/delete/(:segment)', 'Barang::delete/$1');
$routes->get('barang/view/(:segment)', 'Barang::view/$1');
$routes->get('barang/create', 'Barang::create');
$routes->post('barang/save', 'Barang::save'); // Menambahkan rute POST untuk menyimpan data barang
