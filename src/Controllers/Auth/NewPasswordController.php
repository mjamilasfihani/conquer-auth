<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\NewPasswordRequest;

class NewPasswordController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = NewPasswordRequest::class;

    /**
     * @return string
     */
    public function index()
    {
        return $this->render($this->conquer->getForgotViewPath());
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return redirect()->route('auth.login');
    }
}
