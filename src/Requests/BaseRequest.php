<?php

namespace Conquer\Auth\Requests;

use Conquer\Auth\Auth;
use Conquer\Auth\Config\Conquer;
use Conquer\Auth\Models\Users as UserModel;

abstract class BaseRequest
{
    /**
     * Instance of the configuration.
     */
    protected Conquer $conquer;

    /**
     * Instance of `\Conquer\Auth\Auth::check()`
     *
     * @var bool
     */
    protected $isLoggedIn;

    /**
     * Instance of Model
     */
    protected UserModel $model;

    /**
     * Constructor
     */
    public function __construct()
    {
        // initialize
        $this->conquer    = Auth::config();
        $this->isLoggedIn = Auth::check();
        $this->model      = Auth::model();
    }
}
