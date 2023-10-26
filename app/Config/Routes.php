<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */

//$routes->setAutoRoute(true);
//$routes->get('/', 'Home::index');
$routes->get('/', 'SigninController::index',['filter' => 'noAuthGuard']);

//signup page
$routes->get('register', 'SignupController::index',['filter' => 'noAuthGuard']);
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');

//signin page
$routes->get('login', 'SigninController::index',['filter' => 'noAuthGuard']);
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');

//LOGOUT
$routes->get('logout', 'SigninController::signout');

//profile 
$routes->get('profile', 'profileController::index',['filter' => 'authGuard']);