<?php
/**
 * Created by PhpStorm.
 * User: Bruno Louvem
 * Date: 11/10/2016
 * Time: 15:01
 */

return [
    'roles'=>[
        'user'=>[],
        'admin'=>['user'],
        'super_admin'=>['user','admin'],
    ],
    'firewall'=>[]
];