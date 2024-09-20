<?php

require_once "app/bootstrap.php";
require_once "config/routes.php";

$userRoute = "/home"; // $_SERVER["remote_addr"]

if(!array_key_exists(key: $userRoute, array: $gubkaRoutes)) {
    die("This route doesnt exist"); // TODO: redirect to 404
}

$route = $gubkaRoutes[$userRoute]; // $gubkaRoutes['/home'] => [ 'controller'    => \App\Emrah\Controllers\HomeController::class, 'function'      => 'index' ],

$controller = new $route['controller']; // HomeController -> new HomeController;

$controller->{$route['function']}(); // pozovi index funkciju