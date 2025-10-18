<?php
namespace App\Controllers;

class ContactController
{
    // Exibe o formulário de contacto
    public function index()
    {
        return Controller::view('Contact');
    }

    // Processa o envio do formulário
    public function store($params)
    {
        echo "<h3>Dados recebidos:</h3>";
        var_dump($params->nome);
    }
}