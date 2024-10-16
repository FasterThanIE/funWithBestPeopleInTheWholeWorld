<?php

namespace App\Emrah\Services;

use App\Emrah\Models\User;

class AuthService
{
    private readonly User $user;
    public function __construct() {
        $this->user = new User();
    }

    public function create(string $email, string $password): void
    {
        $this->user->create([
            'email'     => $email,
            'password'  => $password,
        ]);
    }

    public function emailExists(string $email): bool
    {
        return $this->user->firstWhere(['email' => $email]) !== null;
    }
}