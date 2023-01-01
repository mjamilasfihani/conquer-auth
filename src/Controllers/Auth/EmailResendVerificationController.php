<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\EmailResendVerificationRequest;

class EmailResendVerificationController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = EmailResendVerificationRequest::class;

    /**
     * @return mixed
     */
    public function update()
    {
        return redirect()->route('auth.login');
    }
}
