<?php

namespace Sydnerdrage\Slim\Zombie\Slim\Feature;


trait SlimAwareTrait {

    protected $app = null;

    protected function setSlim(\Slim\Slim $app) {
        $this->app = $app;
    }

    protected function getSlim() {
        if(is_null($this->app)) {
            throw new \LogicException("Slim has not been set.");
        }
        return $this->app;
    }
} 