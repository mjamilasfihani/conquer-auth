<?php

namespace Conquer\Auth\Requests;

abstract class BaseRequest
{
    /**
     * @var object
     */
    protected $conquer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->conquer = config('Conquer');
    }
}
