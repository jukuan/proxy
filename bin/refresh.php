<?php

$appDir = dirname(__DIR__);
define('APP_DIR', $appDir);
$cacheDir = $appDir . '/cache/app';

require_once $appDir . '/vendor/autoload.php';

$container = buildContainer($cacheDir);
$container->call(function(\App\Command\RefreshCommand $command) {
    $command->run();
});
