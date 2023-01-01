<?php

namespace Conquer\Auth\Config\Traits\Configuration;

trait WithViewModifierAliasConfiguration
{
    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `login`.
     */
    public function setLoginViewPath(string $path)
    {
        $this->setViewsPath('login', $path);

        return $this;
    }

    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `register`.
     */
    public function setRegisterViewPath(string $path)
    {
        $this->setViewsPath('register', $path);

        return $this;
    }

    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `forgot`.
     */
    public function setForgotViewPath(string $path)
    {
        $this->setViewsPath('forgot', $path);

        return $this;
    }

    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `reset`.
     */
    public function setResetViewPath(string $path)
    {
        $this->setViewsPath('reset', $path);

        return $this;
    }
}
