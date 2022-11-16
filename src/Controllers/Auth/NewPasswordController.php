<?php

namespace Conquer\Auth\Controllers\Auth;

use Conquer\Auth\Controllers\Controller;

class NewPasswordController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->render("{$this->conquer->viewsNamespace}\\auth\\reset");
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return 200;
    }
}
