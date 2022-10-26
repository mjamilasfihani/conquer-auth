<?php

namespace Conquer\Auth\Filters\Request;

use Config\Services;

abstract class BaseRequest
{
    /**
     * Instance of Validation
     */
    protected object $validation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->validation = Services::validation();
    }
}
