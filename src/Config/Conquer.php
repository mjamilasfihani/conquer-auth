<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;

class Conquer extends BaseConfig
{
    /**
     * Ever heard about `siteName`? Yes, it's mentioned in CodeIgniter4
     * official docs. I bring it here, feel free to change it.
     *
     * @var string
     */
    public $siteName = 'ConquerAuth';

    /**
     * This is your landing page (route name) after user success to login,
     * i.e $landingRoute = 'dashboard'.
     *
     * @var string
     */
    public $landingRoute = '/';

    /**
     * Reserved routes.
     *
     * @var string[]
     */
    public $reservedRoutes = [
        'login'                   => 'login',
        'logout'                  => 'logout',
        'register'                => 'register',
        'activate-account'        => 'activate-account',
        'resend-activate-account' => 'resend-activate-account',
        'forgot'                  => 'forgot',
        'reset-password'          => 'reset-password',
    ];

    /**
     * Account activation's feature.
     *
     * @var bool
     */
    public $hasActivate = true;

    /**
     * Forgot & Reset password's feature.
     *
     * @var bool
     */
    public $hasForgot = true;

    /**
     * Login/out's feature.
     *
     * @var bool
     */
    public $hasLogin = true;

    /**
     * Registration's feature.
     *
     * @var bool
     */
    public $hasRegister = true;
}
