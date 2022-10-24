<?php

namespace Conquer\Auth\Tests;

trait RouteTestTrait
{
    /**
     * @return false|string
     */
    protected function routeToActivateAccount()
    {
        return route_to('auth.activate-account');
    }

    /**
     * @return false|string
     */
    protected function routeToResendActivateAccount()
    {
        return route_to('auth.resend-activate-account');
    }

    /**
     * @return false|string
     */
    protected function routeToForgot()
    {
        return route_to('auth.forgot');
    }

    /**
     * @return false|string
     */
    protected function routeToResetPassword()
    {
        return route_to('auth.reset-password');
    }

    /**
     * @return false|string
     */
    protected function routeToLogin()
    {
        return route_to('auth.login');
    }

    /**
     * @return false|string
     */
    protected function routeToLogout()
    {
        return route_to('auth.logout');
    }

    /**
     * @return false|string
     */
    protected function routeToRegister()
    {
        return route_to('auth.register');
    }
}
