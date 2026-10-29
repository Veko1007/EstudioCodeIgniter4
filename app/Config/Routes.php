<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/update/(:any)', 'Home::update/$1');
$routes->get('/update/(:any)/(:any)', 'Home::update/$1/$2');


//pelicula
//$routes->get('/pelicula', 'Pelicula::index');


$routes->group('dashboard', function($routes){
    $routes->get('categoria/login', 'Categoria::login');
    $routes->get('categoria/logout', 'Categoria::logout');
    $routes->presenter('pelicula',['only' 
    => ['index','new','create','edit','update','delete','show']]);
    $routes->presenter('categoria',['except' => ['show']]);
});