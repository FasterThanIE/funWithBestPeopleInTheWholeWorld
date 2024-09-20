<?php

namespace App\Emrah\Controllers;

class AuthController
{
    public function showLogin(): array
    {
        return [
            'view'  =>  'login'
        ];
    }

    public function showRegistration(): array
    {
        return [
            'view'  =>  'register'
        ];
    }
}