<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/main', 'Main::index');

$routes->get('/main/about', 'Main::about');

$routes->get('/main/portfolio', 'Main::portfolio');

$routes->get('/main/contact', 'Main::contact');

$routes->get('services/(:segment)', 'Main::services/$1');