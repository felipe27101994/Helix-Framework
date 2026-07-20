<?php

namespace App\core;

class Router {

    private array $routes = [];

    public function get(string $uri, array $classMethod): void
    {
        $this->routes['GET'][$uri] = $classMethod;    
    }

    public function post(string $uri, array $classMethod): void
    {
        $this->routes['POST'][$uri] = $classMethod;    
    }

    public function resolve(): void
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ( !isset($this->routes[$requestMethod][$uri]) ) {

            http_response_code(404);
            echo "Rota não encontrada";
            return;

        }

        [$controller, $method] = $this->routes[$requestMethod][$uri];
        $controllerInstance = new $controller();
        $controllerInstance->$method();

    }

}