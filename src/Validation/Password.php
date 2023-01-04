<?php

namespace Conquer\Auth\Validation;

class Password implements PasswordInterface
{
    public static function default(string $label_password = 'password', string $label_password_confirmation = 'password_confirmation'): array
    {
        return [
            'label' => $label_password,
            'rules' => [
                'required',
                'min_length[8]',
                "password_confirmation[{$label_password},{$label_password_confirmation}]",
            ],
        ];
    }
}
