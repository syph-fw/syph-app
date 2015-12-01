<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 12:02
 */

//Include Autoload
require_once __DIR__.'/vendor/autoload.php';

$env = include_once('env.php');
include_once('global/functions.php');
$loaded = new \Syph\AppBuilder\Environment();
$loaded->setEnv($env);

//Start Routes
foreach($env['packages'] as $name => $path) {
    $loader = new \Syph\Autoload\ClassLoader($name, $path);
    $loader->register();
    $loaded->setLoaded($loader);
}

include_once('routing.php');

return $loaded;

