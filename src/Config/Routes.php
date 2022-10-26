<?php

namespace Conquer\Auth\Config;

use Conquer\Auth\Controllers\Auth\AuthenticatedSessionController;
use Conquer\Auth\Controllers\Auth\EmailResendVerificationController;
use Conquer\Auth\Controllers\Auth\EmailVerificationPromptController;
use Conquer\Auth\Controllers\Auth\NewPasswordController;
use Conquer\Auth\Controllers\Auth\PasswordResetLinkController;
use Conquer\Auth\Controllers\Auth\RegisteredUserController;
use Conquer\Auth\Filters\Request\AuthenticatedSessionRequest;
use Conquer\Auth\Filters\Request\EmailResendVerificationRequest;
use Conquer\Auth\Filters\Request\EmailVerificationPromptRequest;
use Conquer\Auth\Filters\Request\NewPasswordRequest;
use Conquer\Auth\Filters\Request\PasswordResetLinkRequest;
use Conquer\Auth\Filters\Request\RegisteredUserRequest;

/** @var RouteCollection $routes */
$routes->group('', static function ($routes) {
    // Login/Logout
    $routes->get('login', [AuthenticatedSessionController::class, 'create'], ['as' => 'auth.login']);
    $routes->post('login', [AuthenticatedSessionController::class, 'store'], ['filter' => AuthenticatedSessionRequest::class]);
    $routes->get('logout', [AuthenticatedSessionController::class, 'destroy'], ['as' => 'auth.logout']);

    // Registration
    $routes->get('register', [RegisteredUserController::class, 'create'], ['as' => 'auth.register']);
    $routes->post('register', [RegisteredUserController::class, 'store'], ['filter' => RegisteredUserRequest::class]);

    // Activation
    $routes->get('activate-account', [EmailVerificationPromptController::class, 'create'], ['as' => 'auth.activate-account', 'filter' => EmailVerificationPromptRequest::class]);
    $routes->get('resend-activate-account', [EmailResendVerificationController::class, 'create'], ['as' => 'auth.resend-activate-account', 'filter' => EmailResendVerificationRequest::class]);

    // Forgot/Reset Password
    $routes->get('forgot-password', [PasswordResetLinkController::class, 'create'], ['as' => 'auth.forgot-password']);
    $routes->post('forgot-password', [PasswordResetLinkController::class, 'store'], ['filter' => PasswordResetLinkRequest::class]);
    $routes->get('reset-password', [NewPasswordController::class, 'create'], ['as' => 'auth.reset-password']);
    $routes->post('reset-password', [NewPasswordController::class, 'store'], ['filter' => NewPasswordRequest::class]);
});
