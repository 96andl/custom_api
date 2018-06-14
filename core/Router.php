<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 6/14/18
 * Time: 12:29 PM
 */

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        require $file;
        return new self;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw  new Exception('No route defined for this URI');
    }
}