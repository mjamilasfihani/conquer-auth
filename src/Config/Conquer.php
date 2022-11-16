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
     * View's location that setting up as namespace.
     */
    public string $viewsNamespace = '\\Conquer\\Auth\\Views';
}
