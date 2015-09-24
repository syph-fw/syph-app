<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 14:48
 */
namespace DemoApp\Controller;


use Syph\Controller\BaseController;
use Syph\View\View;
use Syph\View\Renderer;

class HomeController extends BaseController
{
    public function index($nome){

//        return View::render(new Renderer('DemoApp:example/index.php'),array('nome'=>$nome));
        return View::render(new Renderer('DemoApp:example/index.html.twig'),array('nome'=>$nome,'teste'=>array('teste1','teste2')));

    }

}