<?php

namespace App\Emrah\Validators\Authentication;

use App\Emrah\Validators\BaseValidator;

class RegistrationValidator extends BaseValidator
{
    public function rules(): array
    {
        return [
            'email' => [
                'type' => BaseValidator::RULE_EMAIL,
            ],
            'password' => [
                'type' => BaseValidator::RULE_STRING,
                'length' => [
                    'min' => 3,
                    'max' => 64,
                ]
            ]
        ];
    }

    public function validateData(array $data): bool
    {
        return $this->validate($this->rules(), $data);
    }
}