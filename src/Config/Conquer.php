<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;
use Conquer\Auth\Config\Traits\WithViewModifier;
use Conquer\Auth\Controllers\Auth\AuthenticatedSessionController;
use Conquer\Auth\Controllers\Auth\EmailResendVerificationController;
use Conquer\Auth\Controllers\Auth\EmailVerificationController;
use Conquer\Auth\Controllers\Auth\NewPasswordController;
use Conquer\Auth\Controllers\Auth\PasswordResetController;
use Conquer\Auth\Controllers\Auth\RegisteredUserController;
use Conquer\Auth\Models\Users;

class Conquer extends BaseConfig
{
    // Load the views modifier
    use WithViewModifier;

    /**
     * App Name
     *
     * @var string
     */
    public $appName = 'ConquerAuth';

    /**
     * Landing Route
     *
     * @var string
     */
    public $landingRoute = '/dashboard';

    /**
     * View's Namespace
     *
     * @var string
     */
    public $viewedNamespace = 'Conquer\Auth';

    /**
     * View's Location
     *
     * @var array
     */
    public $viewsPath = [
        'login'    => 'auth/login',
        'register' => 'auth/register',
        'forgot'   => 'auth/forgot',
        'reset'    => 'auth/reset',
    ];

    /**
     * View's Layout
     *
     * @var string
     */
    public $viewLayout = 'layouts/guest';

    /**
     * Login/Logout Controller
     *
     * @var string
     */
    public $authenticatedSessionController = AuthenticatedSessionController::class;

    /**
     * Registration Controller
     *
     * @var string
     */
    public $registeredUserController = RegisteredUserController::class;

    /**
     * Activation Account Controller
     *
     * @var string
     */
    public $emailVerificationController = EmailVerificationController::class;

    /**
     * Resend Activation Account Controller
     *
     * @var string
     */
    public $emailResendVerificationController = EmailResendVerificationController::class;

    /**
     * Forgot Password Controller
     *
     * @var string
     */
    public $passwordResetController = PasswordResetController::class;

    /**
     * Reset Password Controller
     *
     * @var string
     */
    public $newPasswordController = NewPasswordController::class;

    /**
     * Give access to registration.
     *
     * @var bool
     */
    public $disabledRegistration = false;

    /**
     * Enable/Disabled Forgot Password feature
     *
     * @var bool
     */
    public $preventToReset = false;

    /**
     * Everything we done was from model
     *
     * @var string
     */
    public $userModel = Users::class;
}
