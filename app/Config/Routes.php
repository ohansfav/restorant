<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('home', 'Home::home');
$routes->get('menu', 'Home::menu');
$routes->get('contact', 'Home::contact');
$routes->get('about', 'Home::about');
$routes->get('team', 'Home::team');
$routes->get('booking', 'Home::booking');