<?php namespace Conquer\Auth\Config;

$routes->group('', ['namespace' => '\Conquer\Auth\Controllers'], function($routes)
{

	$routes->get('login', 'LoginController::front_end', ['as' => 'login']);
	$routes->get('register', 'RegisterController::front_end', ['as' => 'register']);
	$routes->get('forgot-password', 'ForgotController::front_end', ['as' => 'forgot-password']);
	
});