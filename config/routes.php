<?php

use App\Emrah\Controllers\HomeController;

$gubkaRoutes = [

    // localhost/home => HomeController::index()
    '/home' => [ // localhost/home
        'controller'    => HomeController::class,
        'function'      => 'index'
    ],
];

// ako se dodje na home,  $controller = new HomeController(); $controller->index();
