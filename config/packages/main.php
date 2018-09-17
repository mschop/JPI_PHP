<?php

$userConfig = @include_once(__DIR__ . '/../../config.php');

$container->loadFromExtension('main', [
    'db' => [
        'host' => $userConfig['db']['host'] ?? 'localhost',
        'port' => $userConfig['db']['port'] ?? 1433,
        'user' => $userConfig['db']['user'] ?? 'sa',
        'pass' => $userConfig['db']['pass'] ?? 'sa04jT14',
    ]
]);