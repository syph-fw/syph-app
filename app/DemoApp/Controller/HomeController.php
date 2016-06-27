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

class HomeController extends BaseController
{

    public function index(){

        $logger = $this->get('logger');
        
        $logger->addInfo('Olá estou vivo!');

        return View::render($this->createView('DemoApp:example/index.html.twig'),array());
    }



}