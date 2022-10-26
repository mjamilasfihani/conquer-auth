<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Authorized;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Features\Auth;

class RegisteredUserController extends Controller
{
    /**
     * @return mixed
     *
     * @throws PageNotFoundException
     */
    public function create()
    {
        // checking up!!!
        if (! Authorized::enable('forgot') || Auth::check() === true) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }

    /**
     * @return mixed
     */
    public function store()
    {
        return 200;
    }
}
