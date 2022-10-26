<?php

namespace Conquer\Auth;

final class Authorized
{
    /**
     * @var bool
     */
    public const ENABLE = true;

    /**
     * @var bool
     */
    public const DISABLE = false;

    /**
     * @return bool
     */
    public static function enable(string $key)
    {
        return config('Conquer')->features[$key] === self::ENABLE;
    }

    /**
     * @return bool
     */
    public static function disable(string $key)
    {
        return config('Conquer')->features[$key] === self::DISABLE;
    }
}
