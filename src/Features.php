<?php

namespace Conquer\Auth;

class Features extends BaseFeature
{
    /**
     * Has Activate's feature.
     */
    public static function hasActivate(): bool
    {
        return self::getConfig()->hasActivate;
    }

    /**
     * Has Forgot's feature.
     */
    public static function hasForgot(): bool
    {
        return self::getConfig()->hasForgot;
    }

    /**
     * Has Login's feature.
     */
    public static function hasLogin(): bool
    {
        return self::getConfig()->hasLogin;
    }

    /**
     * Has Register's feature.
     */
    public static function hasRegister(): bool
    {
        return self::getConfig()->hasRegister;
    }
}
