<?php

namespace Conquer\Auth\Config\Traits\Helpers;

trait WithViewModifierHelper
{
    /**
     * Make views location, you don't need to deal with this.
     */
    private function buildViewsLocation(string $path): string
    {
        return str_replace(['/', '\\'], '\\', "{$this->getViewedNamespace()}/{$path}");
    }

    /**
     * Get the `$viewedNamespace` value.
     */
    public function getViewedNamespace(): string
    {
        return $this->viewedNamespace;
    }

    /**
     * Get the `$viewsPath` value. You must provide the key too.
     */
    public function getViewsPath(string $key): string
    {
        return $this->buildViewsLocation($this->viewsPath[$key]);
    }

    /**
     * Get the `$viewLayout` value.
     */
    public function getViewLayout(): string
    {
        return $this->buildViewsLocation($this->viewLayout);
    }
}
