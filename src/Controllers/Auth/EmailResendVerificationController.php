<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Attempts\Authentication;
use Conquer\Auth\Controllers\Controller;

class EmailResendVerificationController extends Controller
{
    /**
     * @return mixed
     */
    public function create()
    {
        return Authentication::withRequest($this->request)
            ->emailResendVerificationAttempt()
            ->getResult();
    }
}
