<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;
use Conquer\Auth\Features\MustVerifyEmail;
use Conquer\Auth\Features\PasswordResetter;

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
     * View's location that setting up as namespace.
     */
    public string $viewsNamespace = '\\Conquer\\Auth\\Views';

    /**
     * Login's feature.
     */
    public bool $hasLogin = true;

    /**
     * Forgot Password's feature.
     */
    public bool $hasForgot = true;

    /**
     * Registration's feature.
     */
    public bool $registration = true;

    /**
     * Activation's handler.
     *
     * Leave it as null, it will force to activate the new users.
     */
    public ?MustVerifyEmail $activator = null;

    /**
     * Reset Password's handler.
     *
     * Leave it as null, it will do force reset password.
     */
    public ?PasswordResetter $resetter = null;
}
