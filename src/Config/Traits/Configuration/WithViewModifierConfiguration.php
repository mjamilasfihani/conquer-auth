<?php

namespace Conquer\Auth\Config\Traits\Configuration;

trait WithViewModifierConfiguration
{
    /**
     * Force to set the `$viewsPath` variable. You must provide the key too.
     *
     * @return $this
     */
    public function setViewsPath(string $key, string $path)
    {
        $this->viewsPath[$key] = $path;

        return $this;
    }

    /**
     * Force to set the `$viewLayout` variable.
     *
     * @return $this
     */
    public function setViewLayout(string $path)
    {
        $this->viewLayout = $path;

        return $this;
    }
}
