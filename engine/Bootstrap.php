<?php

require_once __DIR__ . '/../vendor/autoload.php';

class_alias('Engine\\Core\\Template\\Asset', 'Asset');
class_alias('Engine\\Core\\Template\\Theme', 'Theme');
class_alias('Engine\\Helper\\Common', 'Helper');

use Engine\App;
use Engine\DI\DI;

try {
    $di = new DI();
    $services = require __DIR__ . '/config/service.php';
    foreach ($services as $service) {
        $provider = new $service($di);
        $provider->init();
    }
    $app = new App($di);
    $app->run();
} catch (\ErrorException $e) {
    echo $e->getMessage();
}
