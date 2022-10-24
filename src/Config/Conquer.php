<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;

class Conquer extends BaseConfig
{
    /**
     * Ever heard about `siteName`? Yes, it's mentioned in CodeIgniter4
     * official docs. I bring it here, feel free to change it.
     */
    public string $siteName = 'ConquerAuth';

    /**
     * This is your landing page (route name) after user success to login,
     * i.e $landingRoute = 'dashboard'.
     */
    public string $landingRoute = '/';

    /**
     * Reserved routes.
     */
    public array $reservedRoutes = [
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
     */
    public bool $hasActivate = true;

    /**
     * Forgot & Reset password's feature.
     */
    public bool $hasForgot = true;

    /**
     * Login/out's feature.
     */
    public bool $hasLogin = true;

    /**
     * Registration's feature.
     */
    public bool $hasRegister = true;
}
