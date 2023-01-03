<?php

namespace Conquer\Auth;

use Conquer\Auth\Config\Conquer;
use Conquer\Auth\Models\Users as UserModel;

interface AuthInterface
{
    /**
     * Instance of the configuration file.
     */
    public static function config(): Conquer;

    /**
     * Instance of the user model.
     */
    public static function model(): UserModel;

    /**
     * Instance of user's object.
     */
    public static function user(): object;

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
