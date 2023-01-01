<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\PasswordResetRequest;

class PasswordResetController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = PasswordResetRequest::class;

    /**
     * @return string
     */
    public function index()
    {
        return $this->render($this->conquer->getResetViewPath());
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return redirect()->route('auth.login');
    }
}
