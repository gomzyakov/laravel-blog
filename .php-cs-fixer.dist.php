<?php

use Gomzyakov\CS\Finder;
use Gomzyakov\CS\Config;

// Routes for analysis with `php-cs-fixer`
$routes = [
    __DIR__ . '/app',
    __DIR__ . '/config',
    __DIR__ . '/database',
    __DIR__ . '/resources',
    __DIR__ . '/routes',
    __DIR__ . '/tests',
];

return Config::createWithFinder(Finder::createWithRoutes($routes));
