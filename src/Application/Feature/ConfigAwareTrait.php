<?php

namespace Sydnerdrage\Slim\Zombie\Application\Feature;

/**
 * Class ConfigAwareTrait  Provides configuration awareness.
 * @package Sydnerdrage\Slim\Zombie\Application\Feature
 */
trait ConfigAwareTrait {

    /**
     * @var array Stores configuration files to load
     */
    protected $configPaths = array();

    /**
     * @param $path Add a file to be loaded as configuration.
     */
    public function addConfig($path) {
        $this->configPaths[] = $path;
    }

    /**
     * @return array Get all configuration added.
     */
    public function getConfig() {
        $mergedConfig = array();
        foreach($this->configPaths as $path) {
            $config = require($path);
            $mergedConfig = array_merge($mergedConfig, $config);
        }

        return $mergedConfig;
    }

} 