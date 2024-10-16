<?php

namespace App\Emrah\Controllers;

use App\Emrah\Models\User;
use App\Emrah\Services\AuthService;
use App\Emrah\Validators\Authentication\RegistrationValidator;

class AuthController
{
    private readonly AuthService $authService;

    public function __construct(){
        $this->authService = new AuthService();
    }

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

    public function register(array $request, RegistrationValidator $registrationValidator)
    {
        $validation = $registrationValidator->validateData($request);

        if(!$validation) {
            die("FAILED VALIDATION, THIS IS A COOL WAY TO VALIDATE STUFF Q.Q");
        }

        if($this->authService->emailExists($request['email'])) {
            die("User already exists");
        }
        $this->authService->create($request['email'], $request['password']);

        header("Location: /");
    }
}