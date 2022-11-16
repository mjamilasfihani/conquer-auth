<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Controllers\Controller;

class RegisteredUserController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
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
