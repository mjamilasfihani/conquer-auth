<?php

namespace Conquer\Auth;

abstract class BaseFeature
{
    /**
     * @return object
     */
    protected static function getConfig()
    {
        return config('Conquer');
    }
}
