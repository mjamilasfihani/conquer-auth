<?php

namespace Conquer\Auth\Models\Traits;

trait Authorization
{
    public static function forcingActivationAccountIsEnabled(): bool
    {
        return self::authorizeForForcingActivationAccount() === true;
    }

    public static function forcingActivationAccountIsDisabled(): bool
    {
        return self::authorizeForForcingActivationAccount() === false;
    }

    public static function registrationingMemberIsEnabled(): bool
    {
        return self::authorizeForRegistrationingMember() === true;
    }

    public static function registrationingMemberIsDisabled(): bool
    {
        return self::authorizeForRegistrationingMember() === false;
    }

    public static function creatingNewPasswordIsEnabled(): bool
    {
        return self::authorizeForCreatingNewPassword() === true;
    }

    public static function creatingNewPasswordIsDisabled(): bool
    {
        return self::authorizeForCreatingNewPassword() === false;
    }
}
