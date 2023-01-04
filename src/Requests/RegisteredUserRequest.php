<?php

namespace Conquer\Auth\Requests;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Conquer\Auth\Validation\Password;

class RegisteredUserRequest extends BaseRequest implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        if ($this->isLoggedIn) {
            return redirect()->to($this->conquer::HOME_PATH);
        }

        if ($this->model::registrationingMemberIsDisabled()) {
            throw PageNotFoundException::forPageNotFound();
        }

        // name field
        $rules['name']['label'] = 'name';
        $rules['name']['rules'] = ['required', 'string', 'max_length[255]'];

        // email field
        $rules['email']['label'] = 'email';
        $rules['email']['rules'] = ['required', 'string', 'valid_email', 'max_length[255]', 'is_unique[users.email]'];

        // password & password_confirmation field
        $rules = array_merge($rules, ['password' => Password::default('password', 'password confirmation')]);

        $validation  = $this->validation->setRules($rules);
        $withRequest = $validation->withRequest($request);

        if ($withRequest->run() === false) {
            return redirect('auth.register')->withInput()->with('errors', $this->validation->getErrors());
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param array|null $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
