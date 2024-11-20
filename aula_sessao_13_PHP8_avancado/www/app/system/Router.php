<?php

namespace bng\System;

use bng\Controllers\Main;
use Exception;

class Router
{
    public static function dispatch()
    {
        // main route values
        $httpverb = $_SERVER['REQUEST_METHOD'];
        $controller = 'main';
        $method = 'index';

        // check uri parameters

        // ct = controller
        if (isset($_GET['ct'])) {
            $controller = $_GET['ct'];
        }

        // mt = method
        if (isset($_GET['mt'])) {
            $method = $_GET['mt'];
        }

        // method parameters
        $parameters = $_GET;

        // remove controller   from parameters
        if (key_exists('ct', $parameters)) {
            unset($parameters['ct']);
        }

        // remove method from parameters
        if (key_exists('mt', $parameters)) {
            unset($parameters['mt']);
        }

        // tentar instaciar o controller e executar o metodo
        try {
            $class = "bng\Controllers\\$controller";
            $controller = new $class();
            $controller->$method(...$parameters);
        } catch (Exception $err) {
            die($err->getMessage());
        }
        

    }
}
