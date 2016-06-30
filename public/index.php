<?php

use Syph\Http\Base\Request;

include_once('../bootstrap.php');

$request = Request::create();

define('BASE_URL',$request->getBaseUrl());

$app = new AppKernel($request);

$response = $app->handleRequest();
$response->show();

