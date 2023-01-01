<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = EmailVerificationRequest::class;

    /**
     * @return mixed
     */
    public function update()
    {
        return redirect()->route('auth.login');
    }
}
