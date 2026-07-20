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
        $this->loadWebRoutes();
        $this->router->resolve();
    }

    private function loadWebRoutes(): void
    {
        $router = $this->router;
        require_once __DIR__ . '/../../routes/web.php';
    }

}