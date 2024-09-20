<?php

require_once "app/bootstrap.php";
require_once "config/routes.php";

$userRoute = str_replace(search: '/testStream', replace: '', subject: $_SERVER['REQUEST_URI']);

if (!array_key_exists(key: $userRoute, array: $gubkaRoutes)) {
    die("This route doesnt exist"); // TODO: redirect to 404
}

$route = $gubkaRoutes[$userRoute]; // $gubkaRoutes['/home'] => [ 'controller'    => \App\Emrah\Controllers\HomeController::class, 'function'      => 'index' ],

$controller = new $route['controller']; // HomeController -> new HomeController;

$response = $controller->{$route['function']}(); // pozovi index funkciju

require_once "view/template.php";