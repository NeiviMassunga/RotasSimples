<?php
require "../vendor/autoload.php";
require "../App/Routes/Routes.php";

try {
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    // Remove o prefixo /RotasSimples/Public se estiver presente
    $baseDir = '/RotasSimples/Public';
    if (strpos($uri, $baseDir) === 0) {
        $uri = substr($uri, strlen($baseDir));
    }

    // Caso o usuário entre com /RotasSimples/Public/ (barra final)
    if ($uri === '' || $uri === '/') {
        $uri = '/';
    }

    if (!isset($router[$request])) {
        throw new Exception("O método de requisição não existe.");
    }

    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception("Erro: Rota '{$uri}' não encontrada.");
    }

    $Controller = $router[$request][$uri];
    $Controller();

} catch (Exception $e) {
    echo $e->getMessage();
}
