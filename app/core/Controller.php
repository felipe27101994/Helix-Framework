<?php

namespace App\Core;

abstract class Controller {

    public function render(string $diretory, array $data = []): void
    {
        $viewInstance = new View();
        $viewInstance->render($diretory, $data);
    }

}