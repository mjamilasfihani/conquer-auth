<?php

namespace Conquer\Auth\Config\Traits\Helpers;

trait WithViewModifierAliasHelper
{
    /**
     * Alias of `getViewsPath($key)`, but the `$key` has filled with `login`.
     */
    public function getLoginViewPath(): string
    {
        return $this->getViewsPath('login');
    }

    /**
     * Alias of `getViewsPath($key)`, but the `$key` has filled with `register`.
     */
    public function getRegisterViewPath(): string
    {
        return $this->getViewsPath('register');
    }

    /**
     * Alias of `getViewsPath($key)`, but the `$key` has filled with `forgot`.
     */
    public function getForgotViewPath(): string
    {
        return $this->getViewsPath('forgot');
    }

    /**
     * Alias of `getViewsPath($key)`, but the `$key` has filled with `reset`.
     */
    public function getResetViewPath(): string
    {
        return $this->getViewsPath('reset');
    }
}
