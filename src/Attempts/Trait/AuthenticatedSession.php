<?php

namespace Conquer\Auth\Attempts\Trait;

trait AuthenticatedSession
{
    /**
     * @return $this
     */
    public function authenticatedSessionAttempt(bool $remember_me = false)
    {
        return $this;
    }
}
