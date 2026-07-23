<?php

namespace App\Core;

class Request {

    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function uri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

}