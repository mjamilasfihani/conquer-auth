<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Auth;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\AuthenticatedSessionRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = AuthenticatedSessionRequest::class;

    /**
     * @return string
     */
    public function index()
    {
        return $this->render($this->conquer->getLoginViewPath());
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return redirect()->to(Auth::landing());
    }

    /**
     * @return mixed
     */
    public function delete()
    {
        return redirect()->route('auth.login');
    }
}
