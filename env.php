<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 19/08/2015
 * Time: 16:36
 */
define("DS",DIRECTORY_SEPARATOR);
define("APP_DIR",substr(strrchr(dirname(__FILE__),DS),1));
define("APP_REAL_PATH", realpath(dirname(__FILE__)));
return array(
    'env' => 'dev',
    'version' => '2.0.1',
    'packages' => array(
        'DemoApp' => __DIR__.DS.'app'.DS,
    )


);