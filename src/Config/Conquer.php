<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;
use Conquer\Auth\Authorized;

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
     * Featured of Conquer\Auth.
     */
    public array $features = [
        'activate' => Authorized::ENABLE,
        'forgot'   => Authorized::ENABLE,
        'login'    => Authorized::ENABLE,
        'register' => Authorized::ENABLE,
    ];
}
