<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;

class PasswordResetController extends Controller
{
    /**
     * @return mixed
     *
     * @throws PageNotFoundException
     */
    public function index()
    {
        // check the forgot password feature.
        if (! $this->conquer->hasForgot) {
            throw PageNotFoundException::forPageNotFound();
        }

        return $this->render("{$this->conquer->viewsNamespace}\\auth\\forgot");
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return 200;
    }
}
