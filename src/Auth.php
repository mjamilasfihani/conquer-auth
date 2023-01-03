<?php

namespace Conquer\Auth;

use Config\Conquer as Config;
use Conquer\Auth\Config\Conquer;
use Conquer\Auth\Models\Users as UserModel;

class Auth implements AuthInterface
{
    /**
     * Instance of the configuration file.
     */
    public static function config(): Conquer
    {
        // initialize
        $class = class_exists(Config::class) ? Config::class : Conquer::class;

        return config($class);
    }

    /**
     * Instance of the user model.
     */
    public static function model(): UserModel
    {
        // initialize
        $config = self::config();

        return new $config->userModel();
    }

    /**
     * Instance of user's object.
     */
    public static function user(): object
    {
        return self::config();
    }

    /**
     * Get the User's ID.
     *
     * @return int|null
     */
    public static function id()
    {
        return session()->get('user_id');
    }

    /**
     * Check there is user's session or not.
     */
    public static function check(): bool
    {
        return null !== self::id();
    }

    /**
     * Attempt to login.
     */
    public static function attempt(string $email, string $password, bool $remember_me = false): bool
    {
        return true;
    }

    /**
     * Destroy the session.
     */
    public static function logout(): void
    {
        session()->remove('user_id');
    }
}
