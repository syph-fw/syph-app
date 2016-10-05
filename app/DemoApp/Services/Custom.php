<?php
/**
 * Created by PhpStorm.
 * User: Bruno Louvem
 * Date: 06/07/2016
 * Time: 22:53
 */

namespace DemoApp\Services;


use Syph\DependencyInjection\ServiceInterface;

class Custom implements ServiceInterface
{
    public function teste()
    {
        return 'teste';
    }

    public function getName()
    {
        return 'demo.custom_service';
    }
}