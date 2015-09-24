<?php

/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 13/08/2015
 * Time: 15:03
 */
include_once(realpath(dirname(__FILE__)) . '/../services/Interfaces/HttpRequestInterface.php');
class Model
{
    public function handleRequest(HttpRequestInterface $request)
    {
        static::bindModel($request);
    }

    public function bindModel(HttpRequestInterface $request)
    {
        $arrRequest = $request->toArray();

        foreach($arrRequest as $r =>$req){
            $method = 'set'.str_replace(' ','',(ucwords(str_replace('_',' ',$r))));

            if(method_exists($this,$method))
                $this->$method($req);
        }


    }



}