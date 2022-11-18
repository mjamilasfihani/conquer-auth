<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;

class AuthenticatedSessionController extends Controller
{
    /**
     * @return mixed
     *
     * @throws PageNotFoundException
     */
    public function index()
    {
        // check the login feature.
        if (! $this->conquer->hasLogin) {
            throw PageNotFoundException::forPageNotFound();
        }

        return $this->render("{$this->conquer->viewsNamespace}\\auth\\login");
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return 200;
    }

    /**
     * @return mixed
     */
    public function delete()
    {
        return 200;
    }
}
