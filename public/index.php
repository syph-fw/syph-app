<?php

use Syph\Http\Http;
use Syph\AppBuilder\AppBuilder;
use Syph\Http\Base\Request;

$env = include_once('../bootstrap.php');

require_once __DIR__ . '/../app/AppKernel.php';

$request = Request::create();
define('BASE_URL',$request->getBaseUrl());

$app = new AppKernel($env,$request);

$response = $app->handleRequest(new AppBuilder());

try{
    echo $response;
} catch(Exception $e){
    echo $e->getMessage();
}
