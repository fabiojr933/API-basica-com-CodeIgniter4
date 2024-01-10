<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('livros/new',             'Livros::new');
$routes->post('livros',                'Livros::create');
$routes->get('livros',                 'Livros::index');
$routes->get('livros/(:segment)',      'Livros::show/$1');
$routes->get('livros/(:segment)/edit', 'Livros::edit/$1');
$routes->put('livros/(:segment)',      'Livros::update/$1');
$routes->patch('livros/(:segment)',    'Livros::update/$1');
$routes->delete('livros/(:segment)',   'Livros::delete/$1');