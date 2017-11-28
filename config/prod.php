<?php
/**
 * prod.php
 *
 * Date: 28/11/2017
 */
$app['twig.path'] = array(__DIR__.'/../views');
$app['twig.options'] = array('cache' => __DIR__.'/../tmp/twig');

$app['assets.named_packages'] = [
    'css' => array('base_urls' => array('http://localhost')),
];
