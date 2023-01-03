<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Router\RouteCollection;
use Conquer\Auth\Auth;

/**
 * @var RouteCollection $routes
 */
$routes->group('', static function ($routes) {
    // Load Configuration
    $config      = Auth::config();
    $controllers = (array) $config->controllers;

    // Login/Logout
    $routes->get('login', [$controllers['authenticatedSessionController'], 'index'], ['as' => 'auth.login']);
    $routes->post('login', [$controllers['authenticatedSessionController'], 'create'], ['filter' => $controllers['authenticatedSessionController']::VALIDATION_CLASS]);
    $routes->get('logout', [$controllers['authenticatedSessionController'], 'delete'], ['as' => 'auth.logout']);

    // Registration
    $routes->get('register', [$controllers['registeredUserController'], 'index'], ['as' => 'auth.register']);
    $routes->post('register', [$controllers['registeredUserController'], 'create'], ['filter' => $controllers['registeredUserController']::VALIDATION_CLASS]);

    // Activation/Resend Account
    $routes->get('activate', [$controllers['emailVerificationController'], 'update'], ['as' => 'auth.activate', 'filter' => $controllers['emailVerificationController']::VALIDATION_CLASS]);
    $routes->get('resend', [$controllers['emailResendVerificationController'], 'update'], ['as' => 'auth.resend', 'filter' => $controllers['emailResendVerificationController']::VALIDATION_CLASS]);

    // Forgot/Reset Password
    $routes->get('forgot', [$controllers['passwordResetController'], 'index'], ['as' => 'auth.forgot']);
    $routes->post('forgot', [$controllers['passwordResetController'], 'create'], ['filter' => $controllers['passwordResetController']::VALIDATION_CLASS]);
    $routes->get('reset', [$controllers['newPasswordController'], 'index'], ['as' => 'auth.reset']);
    $routes->post('reset', [$controllers['newPasswordController'], 'create'], ['filter' => $controllers['newPasswordController']::VALIDATION_CLASS]);
});
