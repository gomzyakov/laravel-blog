<?php

use Gomzyakov\CodeStyleFinder;
use Gomzyakov\CodeStyleConfig;

// Routes for analysis with `php-cs-fixer`
$routes = [
    __DIR__ . '/app',
    __DIR__ . '/config',
    __DIR__ . '/database',
    __DIR__ . '/resources',
    __DIR__ . '/routes',
    __DIR__ . '/tests',
];

return CodeStyleConfig::createWithFinder(CodeStyleFinder::createWithRoutes($routes));
