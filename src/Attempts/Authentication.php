<?php

namespace Conquer\Auth\Attempts;

use CodeIgniter\HTTP\IncomingRequest;
use Conquer\Auth\Attempts\Trait\AuthenticatedSession;
use Conquer\Auth\Attempts\Trait\EmailResendVerification;
use Conquer\Auth\Attempts\Trait\EmailVerificationPrompt;
use Conquer\Auth\Attempts\Trait\NewPassword;
use Conquer\Auth\Attempts\Trait\PasswordResetLink;
use Conquer\Auth\Attempts\Trait\RegisteredUser;

final class Authentication
{
    use AuthenticatedSession;
    use EmailResendVerification;
    use EmailVerificationPrompt;
    use NewPassword;
    use PasswordResetLink;
    use RegisteredUser;

    /**
     * @var IncomingRequest
     */
    protected $request;

    /**
     * Constructor
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
