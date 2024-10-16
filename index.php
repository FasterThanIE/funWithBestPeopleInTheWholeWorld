<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd(mixed $data): void {
    var_dump($data); exit();
}

require_once "app/bootstrap.php";
require_once "config/routes.php";



$userRoute = str_replace(search: '/testStream', replace: '', subject: $_SERVER['REQUEST_URI']);

if (!array_key_exists(key: $userRoute, array: $gubkaRoutes)) {
    header("Location: view/pages/404.html");
}

$route = $gubkaRoutes[$userRoute];

$controller = new $route['controller'];


// TODO: Refactor to use OOP, maybe builder or factory or wtf something?
if(isset($route['functional']) && $route['functional']) {

    $reflection = new ReflectionClass($controller);

    $arguments = [];
    foreach ($reflection->getMethod($route['function'])->getParameters() as $param) {
        if($param->getName() === 'request') {
            $arguments[] = $_REQUEST;
        } else {
            $reflectionParam = $param->getType()->getName();
            $arguments[] = new $reflectionParam;
        }
    }

    call_user_func_array([$controller, $route['function']], $arguments);
} else {
    $response = $controller->{$route['function']}();
    require_once "view/template.php";
}

