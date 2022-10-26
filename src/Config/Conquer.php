<?php

namespace Conquer\Auth\Config;

use CodeIgniter\Config\BaseConfig;
use Conquer\Auth\Authorized;

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
     * @var array
     */
    public $features = [
        'activate' => Authorized::ENABLE,
        'forgot'   => Authorized::ENABLE,
        'login'    => Authorized::ENABLE,
        'register' => Authorized::ENABLE,
    ];
}
