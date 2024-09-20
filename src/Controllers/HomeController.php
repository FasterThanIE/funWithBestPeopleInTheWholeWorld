<?php

namespace App\Emrah\Controllers;

class HomeController
{
    public function index()
    {
        return [
            'view' => 'homepage'
        ];
    }
}