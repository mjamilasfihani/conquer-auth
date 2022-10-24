<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Features;
use Exception;

class RegisteredUserController extends Controller
{
    /**
     * @return string
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     */
    public function create()
    {
        if (! Features::hasRegister()) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }

    /**
     * @return mixed
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     * @throws Exception
     */
    public function store()
    {
        if (! Features::hasRegister()) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }
}
