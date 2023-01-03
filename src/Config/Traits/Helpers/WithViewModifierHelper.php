<?php

namespace Conquer\Auth\Config\Traits\Helpers;

trait WithViewModifierHelper
{
    /**
     * Get the `$viewsPath` value. You must provide the key too.
     */
    public function getViewsPath(string $key): string
    {
        return $this->viewsPath[$key];
    }

    /**
     * Get the `$viewLayout` value.
     */
    public function getViewLayout(): string
    {
        return $this->viewLayout;
    }
}
