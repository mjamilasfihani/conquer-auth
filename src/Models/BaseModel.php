<?php

namespace Conquer\Auth\Models;

use CodeIgniter\Model;

abstract class BaseModel extends Model
{
    // Authorize For Forcing Activation Account
    abstract public static function authorizeForForcingActivationAccount(): bool;

    // Authorize For Registrationing Member
    abstract public static function authorizeForRegistrationingMember(): bool;

    // Authorize For Creating New Password
    abstract public static function authorizeForCreatingNewPassword(): bool;
}
