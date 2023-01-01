<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Router\RouteCollection;
use Conquer\Auth\Auth;

/**
 * @var RouteCollection $routes
 */
$routes->group('', static function ($routes) {
    // Load Configuration
    $config = Auth::config();

    // Login/Logout
    $routes->get('login', [$config->authenticatedSessionController, 'index'], ['as' => 'auth.login']);
    $routes->post('login', [$config->authenticatedSessionController, 'create'], ['filter' => $config->authenticatedSessionController::VALIDATION_CLASS]);
    $routes->get('logout', [$config->authenticatedSessionController, 'delete'], ['as' => 'auth.logout']);

    // Registration
    $routes->get('register', [$config->registeredUserController, 'index'], ['as' => 'auth.register']);
    $routes->post('register', [$config->registeredUserController, 'create'], ['filter' => $config->registeredUserController::VALIDATION_CLASS]);

    // Activation/Resend Account
    $routes->get('activate', [$config->emailVerificationController, 'update'], ['as' => 'auth.activate', 'filter' => $config->emailVerificationController::VALIDATION_CLASS]);
    $routes->get('resend', [$config->emailResendVerificationController, 'update'], ['as' => 'auth.resend', 'filter' => $config->emailResendVerificationController::VALIDATION_CLASS]);

    // Forgot/Reset Password
    $routes->get('forgot', [$config->passwordResetController, 'index'], ['as' => 'auth.forgot']);
    $routes->post('forgot', [$config->passwordResetController, 'create'], ['filter' => $config->passwordResetController::VALIDATION_CLASS]);
    $routes->get('reset', [$config->newPasswordController, 'index'], ['as' => 'auth.reset']);
    $routes->post('reset', [$config->newPasswordController, 'create'], ['filter' => $config->newPasswordController::VALIDATION_CLASS]);
});
