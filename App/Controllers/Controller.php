<?php
namespace App\Controllers;

use League\Plates\Engine;

class Controller
{
    // Método responsável por renderizar as views
    public static function view(string $view, array $data = [])
    {
        // Caminho para a pasta das views
        $viewPath = dirname(__FILE__, 2) . '/Views';

        // Verifica se o arquivo da view existe
        if (!file_exists($viewPath . DIRECTORY_SEPARATOR . $view . '.php')) {
            throw new \Exception("A view '{$view}' não existe.");
        }

        // Instancia o motor de templates (Plates)
        $templates = new Engine($viewPath);

        // Renderiza a view
        echo $templates->render($view, $data);
    }
}
