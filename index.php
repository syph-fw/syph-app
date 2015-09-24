<?php

use Syph\Http\Http;
use Syph\AppBuilder\AppBuilder;

$env = include_once('bootstrap.php');

require_once __DIR__.'/app/AppKernel.php';

$app = new AppKernel($env);

$response = $app->handleRequest(new Http(),new AppBuilder());
//var_dump($app);

try{
    echo $app->getResponse();
} catch(Exception $e){
    echo $e->getMessage();
}

//echo $_GET['path'];