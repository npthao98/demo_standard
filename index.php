<?php
/**
 * Front controller
 *
 * PHP version 7.3.11
 */

/**
 * Composer
 */
require __DIR__ . '/vendor/autoload.php';

use NPT\Controllers\Posts;
use AHT\Router;

/**
 * Routing
 */
$router = new Router;

// Add the routes
$router->add('', ['controller'=>'Home', 'action'=>'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->dispatch($_SERVER['QUERY_STRING']);


