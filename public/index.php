<?php

use Syph\Http\Base\Request;

include_once('../bootstrap.php');

$request = Request::create();

try{
    $app = new AppKernel($request);
    $response = $app->handleRequest();

    $response->show();
}catch (\Exception $e){
    $syphException = new \Syph\Exception\SyphException($e);
    $syphException->getSyphMessage();
}
