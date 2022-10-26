<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Attempts\Authentication;
use Conquer\Auth\Controllers\Controller;

class EmailVerificationPromptController extends Controller
{
    /**
     * @return mixed
     */
    public function create()
    {
        return Authentication::withRequest($this->request)
            ->emailVerificationPromptAttempt()
            ->getResult();
    }
}
