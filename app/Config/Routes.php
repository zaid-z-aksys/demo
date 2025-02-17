<?php

use App\Controllers\AdminController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', function ($routes) {
    $routes->get('dashboard', [AdminController::class, 'index']);
    $routes->group('users', function ($routes) {
        $routes->get('/', [AdminController::class, 'indexUsers']);
    });
});
