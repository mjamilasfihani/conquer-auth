<?php

namespace Conquer\Auth\Requests;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class PasswordResetRequest extends BaseRequest implements FilterInterface
{
    /**
     * Rules
     */
    private array $rules = [
        'email' => ['required'],
    ];

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
        // prevent access for user that has session already
        if ($this->isLoggedIn) {
            return redirect()->to(base_url($this->conquer::HOME_PATH));
        }

        // make sure you have the access to do the action
        if ($this->model::creatingNewPasswordIsDisabled()) {
            throw PageNotFoundException::forPageNotFound();
        }

        $validation  = $this->validation->setRules($this->rules);
        $withRequest = $validation->withRequest($request);

        if ($withRequest->run() === false) {
            return redirect()->route('auth.forgot')->withInput()->with('errors', $this->validation->getErrors());
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
