<?php

namespace Conquer\Auth\Validation\Rules;

interface PasswordInterface
{
    public function password_confirmation(string $password, string $fields, array $data, ?string &$error = null): bool;
}
