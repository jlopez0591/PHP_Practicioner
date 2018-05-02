<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 05/02/18
 * Time: 01:47 AM
 */

class Router
{

    // Rutas/URLs que tiene disponible el sitio.
    protected $routes = [];

    // ?????
    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    // Define las rutas a utilizar.
    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }


        throw new Exception("No route found for this URI");
    }
}