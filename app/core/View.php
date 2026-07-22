<?php

namespace App\Core;

class View {

    public function render(string $diretory, array $data = []): void
    {
        require_once __DIR__ . "/../Views/{$diretory}.php";
    }

}