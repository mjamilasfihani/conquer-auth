<?php

namespace Conquer\Auth\Attempts;

use CodeIgniter\HTTP\IncomingRequest;
use Conquer\Auth\Attempts\Core\AuthenticatedSession;
use Conquer\Auth\Attempts\Core\EmailResendVerification;
use Conquer\Auth\Attempts\Core\EmailVerificationPrompt;
use Conquer\Auth\Attempts\Core\NewPassword;
use Conquer\Auth\Attempts\Core\PasswordResetLink;
use Conquer\Auth\Attempts\Core\RegisteredUser;

final class Authentication
{
    use AuthenticatedSession;
    use EmailResendVerification;
    use EmailVerificationPrompt;
    use NewPassword;
    use PasswordResetLink;
    use RegisteredUser;

    /**
     * Instance of the request.
     */
    protected IncomingRequest $request;

    /**
     * Constructor.
     */
    public function __construct(IncomingRequest $incomingRequest)
    {
        $this->request = $incomingRequest;
    }

    /**
     * Initialize the class itself.
     */
    public static function withRequest(IncomingRequest $incomingRequest): Authentication
    {
        return new self($incomingRequest);
    }

    /**
     * Returning result.
     *
     * @return mixed
     */
    public function getResult()
    {
        return 200;
    }
}
