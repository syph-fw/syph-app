<?php

use Syph\Http\Http;
use Syph\AppBuilder\AppBuilder;
use Syph\Http\Base\Request;

$env = include_once('../bootstrap.php');

require_once __DIR__ . '/../app/AppKernel.php';

$app = new AppKernel($env);

$request = Request::create();
$response = $app->handleRequest($request,new AppBuilder());

try{
    echo $response;
} catch(Exception $e){
    echo $e->getMessage();
}

//echo $_GET['path'];