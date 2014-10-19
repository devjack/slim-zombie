<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 19/10/14
 * Time: 7:07 PM
 */

namespace Sydnerdrage\Slim\Zombie\Application;

use Sydnerdrage\Slim\Zombie\Application\Feature\ConfigAwareTrait;
use Sydnerdrage\Slim\Zombie\Slim\Feature\SlimAwareTrait;

class Router {
    use ConfigAwareTrait;
    use SlimAwareTrait;


    public function loadRoutes() {
        $config = $this->getConfig();
        $app = $this->getSlim();
        foreach($config as $route => $controller) {
            if(is_callable($controller)) {
                $app->route($route, $controller);
            }

            // Since we're loading a whole series of classes. Register a function to do the loading of classes.
            $app->route($route, function() use ($this, $controller) {

                $class = new $controller();

                if(!is_callable($class)) {
                    $class();
                }
            });

        }
    }

} 