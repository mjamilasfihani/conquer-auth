<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;
use Conquer\Auth\Config\Traits\WithViewModifier;
use Conquer\Auth\Controllers\Auth as Controllers;
use Conquer\Auth\Models\Users as UserModel;

class Conquer extends BaseConfig
{
    // Load the views modifier
    use WithViewModifier;

    /**
     * Where should user went?
     *
     * @var string
     */
    public const HOME_PATH = '/dashboard';

    /**
     * Your Site Name
     *
     * @var string
     */
    public $siteName = 'ConquerAuth';

    /**
     * View's Location
     *
     * @var array
     */
    public $viewsPath = [
        'login'    => 'Conquer\Auth\auth\login',
        'register' => 'Conquer\Auth\auth\register',
        'forgot'   => 'Conquer\Auth\auth\forgot',
        'reset'    => 'Conquer\Auth\auth\reset',
    ];

    /**
     * View's Layout
     *
     * @var string
     */
    public $viewLayout = 'Conquer\Auth\layouts\guest';

    /**
     * Defined Controllers
     *
     * @var array
     */
    public $controllers = [
        'authenticatedSessionController'    => Controllers\AuthenticatedSessionController::class,
        'registeredUserController'          => Controllers\RegisteredUserController::class,
        'emailVerificationController'       => Controllers\EmailVerificationController::class,
        'emailResendVerificationController' => Controllers\EmailResendVerificationController::class,
        'passwordResetController'           => Controllers\PasswordResetController::class,
        'newPasswordController'             => Controllers\NewPasswordController::class,
    ];

    /**
     * Setting up the User Model
     *
     * @var string
     */
    public $userModel = UserModel::class;
}
