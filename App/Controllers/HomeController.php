<?php
namespace App\Controllers;

class HomeController
{
    // Exibe a página inicial
    public function index($params = null)
    {
        return Controller::view('Home', ['name' => 'António']);
    }
}
