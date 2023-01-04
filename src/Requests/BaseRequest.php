<?php

namespace Conquer\Auth\Requests;

use CodeIgniter\Validation\Validation;
use Config\Services;
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
     * Instance of Validation
     */
    protected Validation $validation;

    /**
     * Constructor
     */
    public function __construct()
    {
        // initialize
        $this->conquer    = Auth::config();
        $this->isLoggedIn = Auth::check();
        $this->model      = Auth::model();
        $this->validation = Services::validation();
    }
}
