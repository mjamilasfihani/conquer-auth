<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RedirectResponse;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\RegisteredUserRequest;

class RegisteredUserController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = RegisteredUserRequest::class;

    /**
     * @return RedirectResponse|string
     *
     * @throws PageNotFoundException
     */
    public function index()
    {
        // prevent access for user that has session already
        if ($this->isLoggedIn) {
            return redirect()->to(base_url($this->conquer::HOME_PATH));
        }

        // make sure you have the access to do the action
        if ($this->model::registrationingMemberIsDisabled()) {
            throw PageNotFoundException::forPageNotFound();
        }

        return $this->render($this->conquer->getRegisterViewPath());
    }

    /**
     * @return RedirectResponse
     */
    public function create()
    {
        return redirect()->route('auth.resend');
    }
}
