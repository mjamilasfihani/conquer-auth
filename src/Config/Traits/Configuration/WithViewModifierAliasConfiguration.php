<?php

namespace Conquer\Auth\Config\Traits\Configuration;

trait WithViewModifierAliasConfiguration
{
    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `login`.
     *
     * @return $this
     */
    public function setLoginViewPath(string $path)
    {
        $this->setViewsPath('login', $path);

        return $this;
    }

    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `register`.
     *
     * @return $this
     */
    public function setRegisterViewPath(string $path)
    {
        $this->setViewsPath('register', $path);

        return $this;
    }

    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `forgot`.
     *
     * @return $this
     */
    public function setForgotViewPath(string $path)
    {
        $this->setViewsPath('forgot', $path);

        return $this;
    }

    /**
     * Alias of `setViewsPath($key, $path)`, but the `$key` has filled with `reset`.
     *
     * @return $this
     */
    public function setResetViewPath(string $path)
    {
        $this->setViewsPath('reset', $path);

        return $this;
    }
}
