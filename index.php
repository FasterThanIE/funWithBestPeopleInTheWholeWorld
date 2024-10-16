<?php

require_once "app/bootstrap.php";
require_once "config/routes.php";

$userRoute = str_replace(search: '/testStream', replace: '', subject: $_SERVER['REQUEST_URI']);

if (!array_key_exists(key: $userRoute, array: $gubkaRoutes)) {
    die("This route doesnt exist"); // TODO: redirect to 404
}

$route = $gubkaRoutes[$userRoute]; // $gubkaRoutes['/home'] => [ 'controller'    => \App\Emrah\Controllers\HomeController::class, 'function'      => 'index' ],

$controller = new $route['controller']; // HomeController -> new HomeController;


// TODO: Refactor to use OOP, maybe builder or factory or wtf something?
// Problem: Some routes require paramters passed to functions, some dont
// Some require redirects, some dont
// Sug: Builder approach
if(isset($route['functiona']) && $route['functional']) {
    $controller->{$route['function']}($_REQUEST);
} else {
    $response = $controller->{$route['function']}();
    require_once "view/template.php";
}

