<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Controllers\Controller;

class EmailVerificationPromptController extends Controller
{
    /**
     * @return mixed
     *
     * @throws \CodeIgniter\Exceptions\PageNotFoundException
     */
    public function create()
    {
        if (! $this->conquer->hasActivate) {
            throw PageNotFoundException::forPageNotFound();
        }

        return 200;
    }
}
