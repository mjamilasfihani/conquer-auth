<?php

// Conquer\Auth Helper

use Conquer\Auth\Auth;

if (! function_exists('auth')) {
    /**
     * Instance of Auth's class
     */
    function auth(): Auth
    {
        return new Auth();
    }
}
