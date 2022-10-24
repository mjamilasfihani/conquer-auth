<?php

namespace Conquer\Auth\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use Conquer\Auth\Features;

class EmailVerificationPromptController extends BaseController
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
