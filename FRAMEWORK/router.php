<?php>

namespace Framework;

class Router
{
    private $routes = [];


    public function registerRoute($method, $uri, $action)
    {
        $this->routes[$method][$path] = $handler;
    }

    public function get($path, $handler)
    {
        $this->addRoute('GET', $path, $handler);
    }

    public function post($path, $handler)
    {
        $this->addRoute('POST', $path, $handler);
    }

    private function addRoute($method, $path, $handler)
    {
        $this->routes[$method][$path] = $handler;
    }

    public function dispatch($uri, $method)
    {
        if (isset($this->routes[$method][$uri])) {
            $handler = $this->routes[$method][$uri];
            if (is_callable($handler)) {
                return call_user_func($handler);
            } elseif (is_string($handler) && file_exists(basePath($handler))) {
                return require basePath($handler);
            } else {
                http_response_code(500);
                echo "Handler for route '$uri' is not valid.";
            }
        } else {
            http_response_code(404);
            echo "Route '$uri' not found.";
        }
    }
}