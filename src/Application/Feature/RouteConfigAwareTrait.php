<?php


namespace Sydnerdrage\Slim\Zombie\Application\Feature;

/**
 * Class RouteConfigAwareTrait
 * @package Sydnerdrage\Slim\Zombie\Application\Feature
 */
trait RouteConfigAwareTrait {

    /**
     * @var array List of files containing route configuration
     */
    protected $routes = array();

    /**
     * @param $path Add a file containing route configuration
     */
    public function addRouteConfig($path) {

    }

    public function getRouteConfig() {

    }
} 