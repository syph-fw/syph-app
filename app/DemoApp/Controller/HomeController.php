<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 14:48
 */
namespace DemoApp\Controller;


use Syph\Controller\BaseController;
use Syph\Http\Base\Request;
use DemoApp\Model\User;
use Syph\Http\Response\JsonResponse;
use Syph\View\View;

class HomeController extends BaseController
{

    public function index()
    {
        return View::render($this->createView('DemoApp:example/index.html.twig'));
    }

    public function test($name,$id)
    {
        $users = User::all();
        return View::render($this->createView('DemoApp:example/test.html.twig'),compact('id','name','users'));
    }

    public function testPost()
    {
        $request = $this->getRequest();
        $json = new JsonResponse($request->post->getAll());
        echo $json;
    }

}