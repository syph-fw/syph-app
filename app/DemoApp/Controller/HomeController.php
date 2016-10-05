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

    public function index($id = null){

        $logger = $this->get('logger');
        $custom = $this->get('demo.custom_service');
        $logger->addInfo('id -- '.$id);

        return View::render($this->createView('DemoApp:example/index.html.twig'),array());
    }



}