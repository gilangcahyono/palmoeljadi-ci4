<?php

use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\PageController;
use App\Controllers\PostController;
use CodeIgniter\Router\RouteCollection;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/**
 * @var RouteCollection $routes
 */

$routes->group('', static function ($routes) {
  $routes->get('/', [PageController::class, 'index']);
  $routes->get('history', [PageController::class, 'history']);
  $routes->get('organizational-structure', [PageController::class, 'orgStructure']);
  $routes->get('vision-and-mission', [PageController::class, 'visionAndMission']);
  $routes->get('the-head-of-the-orphanage', [PageController::class, 'headOfOrphanage']);
  $routes->get('job-and-function', [PageController::class, 'jobAndFunction']);
  $routes->get('facility', [PageController::class, 'facility']);
  $routes->get('contact', [PageController::class, 'contact']);
  $routes->get('donation', [PageController::class, 'donation']);
});

$routes->group('posts', static function ($routes) {
  $routes->get('', [PostController::class, 'index']);
  $routes->get('(:segment)', [PostController::class, 'view']);
});

$routes->group('dashboard', static function ($routes) {
  $routes->get('/', [DashboardController::class, 'index']);
  $routes->get('posts', [DashboardController::class, 'posts']);
  // $routes->get('(:segment)', [DashboardController::class, 'view']);
});

$routes->get('login', [LoginController::class, 'index']);
$routes->post('login', [LoginController::class, 'autenticate']);
