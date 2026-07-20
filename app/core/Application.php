<?php

namespace App\core;

use App\core\Router;

class Application {

    private Router $router;

    public function __construct()
    {
        $this->router = new Router;
    }

    public function run(): void
    {
        $this->router->resolve();
    }

}