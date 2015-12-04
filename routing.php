<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 12:47
 * Description: Arquivo de rotas do CRUD
 */
use Syph\Routing\Route;
use Syph\Routing\RouterCollection;

RouterCollection::route(
    'home',
    new Route('/', function(){
            $controller = 'DemoApp:HomeController:index';
            return array('controller'=>$controller,'args'=>array());
        }
    )
);
