<?php

 namespace App\Controllers;

 class HomeController {

    public function index()
    {
        return $this->render('home/index');
    }

    private function render(string $direct, array $data = [])
    {
        require_once __DIR__ . "/../Views/{$direct}.php";
    }


 }