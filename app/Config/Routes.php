<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/update/(:any)', 'Home::update/$1');
$routes->get('/update/(:any)/(:any)', 'Home::update/$1/$2');


//pelicula
//$routes->get('/pelicula', 'Pelicula::index');

$routes->presenter('pelicula');