<?php

namespace Conquer\Auth\Filters\Request;

use Config\Services;

abstract class BaseRequest
{
    /**
     * Instance of Validation
     *
     * @var object
     */
    protected $validation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->validation = Services::validation();
    }
}
