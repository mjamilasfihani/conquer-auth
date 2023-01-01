<?php

namespace Conquer\Auth;

use Conquer\Auth\Config\Conquer;

interface AuthInterface
{
    /**
     * Instance of the configuration file.
     */
    public static function config(?string $key = null): Conquer;

    /**
     * Location after the authentication is success.
     */
    public static function landing(?string $force = null): string;

    /**
     * Instance of user's Entity.
     */
    public static function user();

    /**
     * Get the User's ID.
     *
     * @return int|null
     */
    public static function id();

    /**
     * Check there is user's session or not.
     */
    public static function check(): bool;

    /**
     * Attempt to login.
     */
    public static function attempt(string $email, string $password, bool $remember_me = false): bool;

    /**
     * Destroy the session.
     */
    public static function logout(): void;
}
