<?php
/*
 * require composer autoload file
 */
require __DIR__.'/../vendor/autoload.php';

/*
 * Run application
 */
$app = new \App\System\App();
$app->run();