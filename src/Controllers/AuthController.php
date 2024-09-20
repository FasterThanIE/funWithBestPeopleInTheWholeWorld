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
}