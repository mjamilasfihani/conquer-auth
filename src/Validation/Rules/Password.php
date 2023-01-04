<?php

namespace Conquer\Auth\Validation\Rules;

class Password implements PasswordInterface
{
    public function password_confirmation(string $password, string $fields, array $data, ?string &$error = null): bool
    {
        $label = explode(',', $fields);

        if ($data['password_confirmation'] !== $password) {
            $error = lang('Validation.matches', [
                'field' => $label[1],
                'param' => $label[0],
            ]);

            return false;
        }

        return true;
    }
}
