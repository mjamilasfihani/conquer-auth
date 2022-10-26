<?php

namespace Conquer\Auth\Attempts;

use CodeIgniter\HTTP\IncomingRequest;

final class Authentication
{
    /**
     * @var IncomingRequest
     */
    private $request;

    /**
     * @var bool
     */
    private $remember_me = false;

    /**
     * Constructor
     */
    public function __construct(IncomingRequest $request, bool $remember_me = false)
    {
        $this->request     = $request;
        $this->remember_me = $remember_me;
    }
}
