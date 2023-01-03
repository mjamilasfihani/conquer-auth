<?php

namespace Conquer\Auth\Controllers\Auth;

use CodeIgniter\HTTP\RedirectResponse;
use Conquer\Auth\Controllers\Controller;
use Conquer\Auth\Requests\AuthenticatedSessionRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * @var string
     */
    public const VALIDATION_CLASS = AuthenticatedSessionRequest::class;

    /**
     * @return RedirectResponse|string
     */
    public function index()
    {
        // prevent access for user that has session already
        if ($this->isLoggedIn) {
            return redirect()->to(base_url($this->conquer::HOME_PATH));
        }

        // send the authorization
        $data['registrationing_member_is_enabled'] = $this->model::registrationingMemberIsEnabled();
        $data['creating_new_password_is_enabled']  = $this->model::creatingNewPasswordIsEnabled();

        return $this->render($this->conquer->getLoginViewPath(), $data);
    }

    /**
     * @return RedirectResponse
     */
    public function create()
    {
        return redirect()->to($this->conquer::HOME_PATH);
    }

    /**
     * @return RedirectResponse
     */
    public function delete()
    {
        return redirect()->route('auth.login');
    }
}
