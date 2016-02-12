<?php
//Include Composer Autoload
require_once __DIR__.'/vendor/autoload.php';

define("DS",DIRECTORY_SEPARATOR);
define("APP_DIR",substr(strrchr(dirname(__FILE__),DS),1));
define("USER_APPS_DIR",__DIR__.DS.'app'.DS);
define("APP_REAL_PATH", realpath(dirname(__FILE__)));

foreach (new DirectoryIterator(USER_APPS_DIR) as $fileInfo) {
    if($fileInfo->isDot()) continue;
    if($fileInfo->isFile()) continue;
    $loader = new \Syph\Autoload\ClassLoader($fileInfo->getFilename(), USER_APPS_DIR);
    $loader->register();
}