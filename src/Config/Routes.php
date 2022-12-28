<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Router\RouteCollection;
use Conquer\Auth\Controllers\Auth\AuthenticatedSessionController;
use Conquer\Auth\Controllers\Auth\EmailResendVerificationController;
use Conquer\Auth\Controllers\Auth\EmailVerificationController;
use Conquer\Auth\Controllers\Auth\NewPasswordController;
use Conquer\Auth\Controllers\Auth\PasswordResetController;
use Conquer\Auth\Controllers\Auth\RegisteredUserController;
use Conquer\Auth\Requests\AuthenticatedSessionRequest;
use Conquer\Auth\Requests\EmailResendVerificationRequest;
use Conquer\Auth\Requests\EmailVerificationRequest;
use Conquer\Auth\Requests\NewPasswordRequest;
use Conquer\Auth\Requests\PasswordResetRequest;
use Conquer\Auth\Requests\RegisteredUserRequest;

/** @var RouteCollection $routes */
$routes->group('', static function ($routes) {
    // Login/Logout
    $routes->get('login', [AuthenticatedSessionController::class, 'index'], ['as' => 'auth.login']);
    $routes->post('login', [AuthenticatedSessionController::class, 'create'], ['filter' => AuthenticatedSessionRequest::class]);
    $routes->get('logout', [AuthenticatedSessionController::class, 'delete'], ['as' => 'auth.logout']);

    // Registration
    $routes->get('register', [RegisteredUserController::class, 'index'], ['as' => 'auth.register']);
    $routes->post('register', [RegisteredUserController::class, 'create'], ['filter' => RegisteredUserRequest::class]);

    // Activation
    $routes->get('activate', [EmailVerificationController::class, 'action'], ['as' => 'auth.activate', 'filter' => EmailVerificationRequest::class]);
    $routes->get('resend', [EmailResendVerificationController::class, 'action'], ['as' => 'auth.resend', 'filter' => EmailResendVerificationRequest::class]);

    // Forgot/Reset Password
    $routes->get('forgot', [PasswordResetController::class, 'index'], ['as' => 'auth.forgot']);
    $routes->post('forgot', [PasswordResetController::class, 'create'], ['filter' => PasswordResetRequest::class]);
    $routes->get('reset', [NewPasswordController::class, 'index'], ['as' => 'auth.reset']);
    $routes->post('reset', [NewPasswordController::class, 'create'], ['filter' => NewPasswordRequest::class]);
});
