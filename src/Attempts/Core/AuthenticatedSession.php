<?php

namespace Conquer\Auth\Attempts\Core;

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
