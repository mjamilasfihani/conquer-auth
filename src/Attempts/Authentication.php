<?php

namespace Conquer\Auth\Attempts;

use CodeIgniter\HTTP\CLIRequest;
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
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * Constructor.
     *
     * @param mixed $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Initialize the class itself.
     *
     * @param mixed $request
     */
    public static function withRequest($request): Authentication
    {
        return new self($request);
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
