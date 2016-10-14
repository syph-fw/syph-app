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

class DashboardController extends BaseController
{

    public function index()
    {
        return View::render($this->createView('DemoApp:dashboard/login.html.twig'));
    }

    public function test()
    {
        return View::render($this->createView('DemoApp:dashboard/test.html.twig'));
    }

    public function check()
    {
        sd($this->get('http.request')->post);
        return View::render($this->createView('DemoApp:dashboard/test.html.twig'));
    }



}