<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/02/18
 * Time: 01:47 AM
 */

namespace App\Core;

class Router
{

    // Rutas/URLs que tiene disponible el sitio.
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
//            die($this->routes[$requestType][$uri]);
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri]));
        }


        throw new Exception("No route found for this URI");
    }

    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond tot the {$action} action.");
        }
        return $controller->$action();
    }
}