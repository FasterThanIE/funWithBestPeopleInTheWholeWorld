<?php


use App\Emrah\Controllers\AuthController;
use App\Emrah\Controllers\HomeController;

$gubkaRoutes = [

    '/home' => [
        'controller'    => HomeController::class,
        'function'      => 'index'
    ],

    '/login' => [
        'controller'    => AuthController::class,
        'function'      => 'showLogin',
    ],

    '/register' => [
        'controller'    => AuthController::class,
        'function'      => 'showRegistration',
    ]
];

