<?php
/**
 * App.php
 *
 * User: Stephane BRUN
 * Date: 28/11/2017
 */

/* Application initialization */
$app = new Silex\Application();
$app->register(new Silex\Provider\VarDumperServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider());
$app->register(new Silex\Provider\AssetServiceProvider());

// https://github.com/moust/silex-cache-service-provider
$app->register(new Moust\Silex\Provider\CacheServiceProvider());

/* Routes */
$app->get('/', 'Controller::index')->bind('home');

return $app;