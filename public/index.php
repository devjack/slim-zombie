<?php
// Include composer's autoloader.  This will make vendor libraries available to our code.
require_once '../vendor/autoload.php';


$app = new \Slim\Slim();

$app->route('/:controller/:action', function($controller, $action) use ($app) {
    $controller = new $controller($app);
    $controller->$action();
});
