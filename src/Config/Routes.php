<?php

use Conquer\Auth\Config\Auth as AuthConfig;

// Load the Routing config
$routing = config(AuthConfig::class)->routing;

// ConuqerAuth Routes
$routes->group($routing['group'], ['namespace' => $routing['namespace']], function($routes)
{
	// Login
	$routes->get($routing['login'], 'Login::get');
	$routes->post($routing['login'], 'Login::post');

	// Logout
	$routes->get($routing['logout'], 'Logout::get');

	// Register
	$routes->get($routing['register'], 'Register::get');
	$routes->post($routing['register'], 'Register::post');

	// Activate Account/Resend
	$routes->get($routing['activate'], 'Account::activate');
	$routes->get($routing['resend'], 'Account::resend');

	// Forgot Password
    $routes->get($routing['forgot'], 'Password::get');
    $routes->post($routing['forgot'], 'Password::post');

    // Reset Password
    $routes->get($routing['reset'], 'Reset::get');
    $routes->post($routing['reset'], 'Reset::post');
});
