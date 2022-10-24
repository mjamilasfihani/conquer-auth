<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Features;

class EmailResendVerificationController extends Controller
{
    /**
     * @return string
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     */
    public function create()
    {
        if (! Features::hasActivate()) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }
}
