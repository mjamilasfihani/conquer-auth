<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;

class RegisteredUserController extends Controller
{
    /**
     * @return mixed
     *
     * @throws PageNotFoundException
     */
    public function index()
    {
        // check the registration feature.
        if (! $this->conquer->registration) {
            throw PageNotFoundException::forPageNotFound();
        }

        return $this->render("{$this->conquer->viewsNamespace}\\auth\\register");
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return 200;
    }
}
