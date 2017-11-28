<?php
/**
 * index.php
 *
 * User: Stéphane BRUN
 * Date: 17/11/2017
 */
require_once __DIR__ . '/../vendor/autoload.php';

$app = include __DIR__.'/../src/App.php';

//require __DIR__.'/../config/prod.php';
require __DIR__.'/../config/dev.php';

$app->run();