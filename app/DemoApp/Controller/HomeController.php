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
use Syph\Http\Redirect;
use Syph\Http\Response\JsonResponse;
use Syph\Security\Firewall\Firewall;
use Syph\View\View;

class HomeController extends BaseController
{

    public function index()
    {
        return View::render($this->createView('DemoApp:example/index.html.twig'));
    }

    public function login()
    {
        return View::render($this->createView('DemoApp:example/form.html.twig'));
    }

    public function checkAuth()
    {
        /**
         * @var Firewall $firewall
         */
        $firewall = $this->get('security.firewall');
        $request = $this->getRequest();
        $username = $request->post->get('username');
        $pass = $request->post->get('pass');

        if($username == 'bruno' && $pass == 'loop'){
            $user = new \Syph\Security\Auth\User\User($username, $pass);
            $firewall->authUserOnFirewall('admin',$user);
            return Redirect::to('/admin/');
        }else{
            return Redirect::to('/login');
        }
    }

    public function logout()
    {
        /**
         * @var Firewall $firewall
         */
        $firewall = $this->get('security.firewall');
        $firewall->removeUserOnFirewall('admin');

//        $session = $this->get('http.session');
//        sd($session->get('user_signed'));

        return Redirect::to('/login');
    }

    public function test($name,$id)
    {
        $users = User::all();
        return View::render($this->createView('DemoApp:example/test.html.twig'),compact('id','name','users'));
    }

    public function admin()
    {
        return View::render($this->createView('DemoApp:example/admin.html.twig'));
    }

}