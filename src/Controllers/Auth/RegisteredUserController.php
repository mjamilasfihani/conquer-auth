<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RedirectResponse;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\RegisteredUserRequest;
use Throwable;

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
        if ($this->isLoggedIn) {
            return redirect()->to($this->conquer::HOME_PATH);
        }

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
        try {
            $this->model->insert([
                'name'     => (string) $this->request->getPost('name'),
                'email'    => (string) $this->request->getPost('email'),
                'password' => password_hash((string) $this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);
        } catch (Throwable $e) {
            return redirect('auth.register')->with('error', 'Whoops! Please try again later.');
        }

        return redirect('auth.login');
    }
}
