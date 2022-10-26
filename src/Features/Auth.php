<?php

namespace Conquer\Auth\Features;

use Conquer\Auth\Models\Users;

class Auth
{
    /**
     * @var string
     */
    public const DEFINED_SESSION = 'id';

    /**
     * @return int|null
     */
    public static function id()
    {
        return session()->get(self::DEFINED_SESSION);
    }

    /**
     * @return bool
     */
    public static function check()
    {
        return (bool) self::id();
    }

    /**
     * @return mixed
     */
    public static function user()
    {
        helper('conquer');

        return model(Users::class)->find(str_decrypt(self::id()));
    }

    /**
     * @return void
     */
    public static function logout()
    {
        session()->remove(self::DEFINED_SESSION);
    }
}
