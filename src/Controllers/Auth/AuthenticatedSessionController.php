<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;
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
        if (! $this->conquer->hasLogin) {
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
        if (! $this->conquer->hasLogin) {
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
        if (! $this->conquer->hasLogin) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }
}
