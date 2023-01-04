<?php

namespace Conquer\Auth\Validation;

interface PasswordInterface
{
    public static function default(string $label_password = 'password', string $label_password_confirmation = 'password_confirmation'): array;
}
