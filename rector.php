<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Php74\Rector\Property\TypedPropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

/**
 * More info about Rector on https://github.com/rectorphp/rector.
 */
return static function (RectorConfig $rectorConfig): void {
    // paths to refactor; solid alternative to CLI arguments
    $rectorConfig->paths([
        __DIR__ . '/app',
        __DIR__ . '/tests',
    ]);

    // is your PHP version different from the one you refactor to? [default: your PHP version], uses PHP_VERSION_ID format
    $rectorConfig->phpVersion(PhpVersion::PHP_80);

    // Path to PHPStan with extensions, that PHPStan in Rector uses to determine types
    $rectorConfig->phpstanConfig(__DIR__ . '/phpstan.neon.dist');

    // register sets rule
    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::PHP_81,
        SetList::EARLY_RETURN,
        SetList::DEAD_CODE,
        LevelSetList::UP_TO_PHP_81,
    ]);
};
