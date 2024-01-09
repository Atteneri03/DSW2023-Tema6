<?php

use Philo\Blade\Blade;

require_once "../vendor/autoload.php";

$views = "../src/views";
$cache = "../cache";
$blade = new Blade($views,$cache);

// Router system
$router = new AltoRouter();
// List of routes
require_once '../src/routers/router.php';

// End of list
$match = $router->match();
if($match) {
 $target = $match["target"];
 if(is_string($target) && strpos($target, "#") !== false) {
     list($controller, $action) = explode("#", $target);
     $controller = "Daw2\\Dsw2023Tema6\\Controllers\\" . $controller;
     $controller = new $controller($router);
     $controller->$action($match["params"]);
 } else {
     if(is_callable($match["target"])) 
call_user_func_array($match["target"], $match["params"]);
     else require $match["target"];
 }
} else {
 echo "Ruta no válida";
 die();
}
