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
    public function home($nome){
        $renderer = $this->get('view.renderer');
        $renderer->run('DemoApp:example/index.html.twig');
        return View::render($renderer,array('nome'=>$nome));

    }

    public function index(){
        $renderer = $this->get('view.renderer');
        $renderer->run('DemoApp:index.html.twig');
        return View::render($renderer,array('nome'=>"Bruno"));

    }



}