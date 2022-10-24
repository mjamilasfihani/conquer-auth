<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Features;
use Exception;

class AuthenticatedSessionController extends Controller
{
    /**
     * @return mixed
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     */
    public function create()
    {
        if (! Features::hasLogin()) {
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
        if (! Features::hasLogin()) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }

    /**
     * @return mixed
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     */
    public function destroy()
    {
        if (! Features::hasLogin()) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }
}
