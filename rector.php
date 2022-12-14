<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    // get parameters

    $rectorConfig->paths([__DIR__ . '/src']);
    $rectorConfig->skip([
        RenameParamToMatchTypeRector::class => [__DIR__ . '/src'],
    ]);

    // Define what rule sets will be applied
    $rectorConfig->import(SetList::NAMING);
};
