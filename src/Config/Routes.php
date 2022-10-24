<?php

use Conquer\Auth\Controllers\Auth\AuthenticatedSessionController;
use Conquer\Auth\Controllers\Auth\EmailResendVerificationController;
use Conquer\Auth\Controllers\Auth\EmailVerificationPromptController;
use Conquer\Auth\Controllers\Auth\NewPasswordController;
use Conquer\Auth\Controllers\Auth\PasswordResetLinkController;
use Conquer\Auth\Controllers\Auth\RegisteredUserController;

// Conquer\Auth Routes
$routes->group('', static function ($routes) {
    /**
     * Conquer\Auth's config
     */
    $conquer        = config('conquer');
    $reservedRoutes = $conquer->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], [AuthenticatedSessionController::class, 'create'], ['as' => 'auth.login']);
    $routes->post($reservedRoutes['login'], [AuthenticatedSessionController::class, 'store']);
    $routes->get($reservedRoutes['logout'], [AuthenticatedSessionController::class, 'destroy'], ['as' => 'auth.logout']);

    // Registration
    $routes->get($reservedRoutes['register'], [RegisteredUserController::class, 'create'], ['as' => 'auth.register']);
    $routes->post($reservedRoutes['register'], [RegisteredUserController::class, 'store']);

    // Activation
    $routes->get($reservedRoutes['activate-account'], [EmailVerificationPromptController::class, 'create'], ['as' => 'auth.activate-account']);
    $routes->get($reservedRoutes['resend-activate-account'], [EmailResendVerificationController::class, 'create'], ['as' => 'auth.resend-activate-account']);

    // Forgot/Reset
    $routes->get($reservedRoutes['forgot'], [PasswordResetLinkController::class, 'create'], ['as' => 'auth.forgot']);
    $routes->post($reservedRoutes['forgot'], [PasswordResetLinkController::class, 'store']);
    $routes->get($reservedRoutes['reset-password'], [NewPasswordController::class, 'create'], ['as' => 'auth.reset-password']);
    $routes->post($reservedRoutes['reset-password'], [NewPasswordController::class, 'store']);
});
