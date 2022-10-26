<?php

namespace Conquer\Auth\Features;

use Conquer\Auth\Models\Users;

class Auth
{
    /**
     * @var string
     */
    public const SESSION_NAME = 'user_id';

    /**
     * @return int|null
     */
    public static function id()
    {
        return session()->get(self::SESSION_NAME);
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
        return model(Users::class)->find(self::id());
    }

    /**
     * @return void
     */
    public static function logout()
    {
        session()->remove(self::SESSION_NAME);
    }
}
