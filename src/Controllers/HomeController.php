<?php

namespace App\Emrah\Controllers;

class HomeController
{
    public function index(): array
    {
        return [
            'view' => 'homepage'
        ];
    }
}