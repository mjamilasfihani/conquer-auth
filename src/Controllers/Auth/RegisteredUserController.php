<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\RegisteredUserRequest;

class RegisteredUserController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = RegisteredUserRequest::class;

    /**
     * @return string
     */
    public function index()
    {
        return $this->render($this->conquer->getRegisterViewPath());
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return redirect()->route('auth.resend');
    }
}
