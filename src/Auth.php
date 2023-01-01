<?php

namespace Conquer\Auth;

use Conquer\Auth\Entities\Users as UserEntity;
use Conquer\Auth\Models\Users;

class Auth
{
    // /**
    //  * @return UserEntity
    //  */
    // public static function user()
    // {
    //     return model(Users::class)->asObject()->where('id', self::id())->first();
    // }

    /**
     * @return int|null
     */
    public static function id()
    {
        return session()->get('user_id');
    }

    /**
     * @return bool
     */
    public static function check()
    {
        return null !== self::id();
    }

    // /**
    //  * @return bool
    //  */
    // public static function attempt(string $email, string $password, bool $remember_me = false)
    // {
    //     $user = model(Users::class)->asObject()->where('email', $email)->first();

    //     if ($user || ! password_verify($user->passwword, PASSWORD_DEFAULT)) {
    //         return false;
    //     }

    //     session()->set('user_id', $user->id);

    //     return true;
    // }

    /**
     * @return void
     */
    public static function logout()
    {
        session()->remove('user_id');
    }
}
