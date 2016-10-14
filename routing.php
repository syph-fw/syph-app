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


RouterCollection::route(
    'test',
    new Route('/test', function(){
        $controller = 'DemoApp:HomeController:test';
        return array('controller'=>$controller,'args'=>array());
    }
    )
);

RouterCollection::route(
    'admin',
    new Route('/admin', function(){
        $controller = 'DemoApp:DashboardController:index';
        return array('controller'=>$controller,'args'=>array());
    }
    )
);

RouterCollection::route(
    'admin_test',
    new Route('/admin/test', function(){
        $controller = 'DemoApp:DashboardController:test';
        return array('controller'=>$controller,'args'=>array());
    }
    )
);

RouterCollection::route(
    'admin_check',
    new Route('/admin/check', function(){
        $controller = 'DemoApp:DashboardController:check';
        return array('controller'=>$controller,'args'=>array());
    }
    )
);