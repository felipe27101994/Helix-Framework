<?php

namespace App\Core;
use App\Core\Request;

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

        $baseURI = "helix-framework/public/";

        $request = new Request();
        $requestMethod = $request->method();

        $uri = parse_url($request->uri(), PHP_URL_PATH);
        $uri = str_replace($baseURI, "", $uri);

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