<?php
/**
 * Created by PhpStorm.
 * User: Bruno Louvem
 * Date: 11/10/2016
 * Time: 15:01
 */

return [
    'app_key' => '{key}',
    'roles'=>[
        'user'=>[],
        'admin'=>['user'],
        'super_admin'=>['user','admin'],
    ],
    'provider'=>'database',
    'firewall'=>[
        'admin' => [
            'prefix' => '/admin/',
            'login_path' => '/admin/login',
            'redirect_path' => '/login'
        ]
    ]
];