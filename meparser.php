<?php

require_once 'vendor/autoload.php';

use Application\Application;

try {
    Application::run($argc, $argv);
} catch (\Exception $e) {
    echo "EXCEPTION#".$e->getCode().": ".$e->getMessage()."\n";
}

