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
$router = new RouterCollection();

// Adição de rota da forma antiga, ainda compatível
RouterCollection::route(
    'home',
    new Route('/', function(){
            return ['controller'=>'DemoApp:HomeController:index'];
        }
    )
);

// Nova forma de cadastro de rota, com array especificando nome e path da rota e restringindo o tipo da requisição a um GET
$router->addGet(['path'=>'/test/{name}/{id}','name'=>'Teste'], 'DemoApp:HomeController:test');

// Nova rota restringindo o tipo a um POST e sem especificar o nome da rota
$router->addPost('/test/post', 'DemoApp:HomeController:testPost');



