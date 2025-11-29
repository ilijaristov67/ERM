<?php

uses(
    Tests\TestCase::class,
    Illuminate\Foundation\Testing\RefreshDatabase::class,
)->in('Feature', 'Unit');

$moduleTestPaths = glob(__DIR__.'/../Modules/*/tests/*', GLOB_ONLYDIR);

foreach ($moduleTestPaths as $path) {
    uses(
        Tests\TestCase::class,
        Illuminate\Foundation\Testing\RefreshDatabase::class,
    )->in($path);
}
