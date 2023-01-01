<?php

namespace Conquer\Auth;

use Conquer\Auth\Config\Conquer;
use Conquer\Auth\Models\Users;

class Auth implements AuthInterface
{
    /**
     * Instance of the configuration file.
     */
    public static function config(?string $key = null): Conquer
    {
        $config = config('Conquer');

        return null === $key ? $config : $config->{$key};
    }

    /**
     * Location after the authentication is success.
     */
    public static function landing(?string $force = null): string
    {
        return base_url($force ?? self::config()->landingRoute);
    }

    /**
     * Instance of user's Entity.
     */
    public static function user()
    {
        return [];
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
        new Users();

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
