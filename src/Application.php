<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 19/10/14
 * Time: 6:57 PM
 */

namespace Sydnerdrage\Slim\Zombie;


use Sydnerdrage\Slim\Zombie\Application\Feature\ConfigAwareTrait;
use Sydnerdrage\Slim\Zombie\Slim\Feature\SlimAwareTrait;

class Application {
    use ConfigAwareTrait;
    use SlimAwareTrait;

    /**
     * Application initialisation.
     */
    public function init() {

    }

    public function run() {
    }

} 