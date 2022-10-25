<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;
use Exception;

class RegisteredUserController extends Controller
{
    /**
     * @return mixed
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     */
    public function create()
    {
        if (! $this->conquer->hasRegister) {
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
        if (! $this->conquer->hasRegister) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }
}
