<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 12:02
 */

use Syph\Core\Kernel;

class AppKernel extends Kernel
{

    public function registerApps(){
        $apps = array(

            new DemoApp\DemoApp(),

        );
        return $apps;
    }





}