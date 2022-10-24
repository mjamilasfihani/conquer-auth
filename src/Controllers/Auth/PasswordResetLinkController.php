<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Features;
use Exception;

class PasswordResetLinkController extends Controller
{
    /**
     * @return string
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     */
    public function create()
    {
        if (! Features::hasForgot()) {
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
        if (! Features::hasForgot()) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }
}
