<?php

namespace App\Emrah\Controllers;

use App\Emrah\Models\User;
use App\Emrah\Validators\Authentication\RegistrationValidator;
use Illuminate\Support\Facades\Redirect;

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

    public function register(array $request)
    {
        $validator = new RegistrationValidator();
        $validation = $validator->validateData($request);

        if(!$validation) {
            die("FAILED VALIDATION, THIS IS A COOL WAY TO VALIDATE STUFF Q.Q");
        }

        User::create([
            'email' => $request['email'],
            'password' => $request['password'],
            'phone' => '12',
            'status' => 1
        ]);

        header("Location: https://google.com");
    }
}