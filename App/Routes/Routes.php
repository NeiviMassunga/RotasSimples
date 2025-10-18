<?php

// Função para carregar controladores e métodos dinamicamente
function load(string $controller, string $action)
{
    try {
        $controllerNamespace = "App\\Controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controlador '{$controller}' não existe.");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("O método '{$action}' não existe no controlador '{$controller}'.");
        }

        $controllerInstance->$action((object)$_REQUEST);
    } catch (Exception $e) {
        echo "<p style='color:red;'>Erro: " . $e->getMessage() . "</p>";
    }
}

// Definição das rotas
$router = [
    'GET' => [
        '/' => fn() => load('HomeController', 'index'),
        '/contact' => fn() => load('ContactController', 'index'),
    ],
    'POST' => [
        '/contact' => fn() => load('ContactController', 'store'),
    ]
];