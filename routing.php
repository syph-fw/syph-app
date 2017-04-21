<?php

use Syph\Routing\RouterCollection;

$router = new RouterCollection();

$router->add('/', 'DemoApp:HomeController:index');
//login
$router->addGet(['path'=>'/login','name'=>'login' ], 'DemoApp:HomeController:login');
//logout
$router->addGet(['path'=>'/logout','name'=>'logout' ], 'DemoApp:HomeController:logout');
//auth checker
$router->addPost('/auth', 'DemoApp:HomeController:checkAuth');
//admin
$router->addGet(['path'=>'/admin/','name'=>'Teste',''=>'auth'], 'DemoApp:HomeController:admin');



