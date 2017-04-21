<?php
//echo phpinfo();die;
use Syph\Http\Base\Request;
//
//echo "test";die;
include_once('../bootstrap.php');

$request = Request::create();
try{
    $app = new AppKernel($request);
    $response = $app->handleRequest();

    $response->show();
    $app->finish();
}catch (\Exception $e){
    $syphException = new \Syph\Exception\SyphException($e);
    $syphException->getSyphMessage();
}
