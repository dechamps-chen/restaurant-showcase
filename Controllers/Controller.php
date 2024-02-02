<?php

namespace App\Controllers;

abstract class Controller
{
    protected function render(string $path, array $data = [])
    {
        extract($data); // evite de faire deux boucles de tableau, tableau dans un tableau, evite de boucler dans le 
        // tableau vierge

        ob_start();
        // on créer le buffer de sortie, ouvre un canal ou l'on va stocker ce que l'on veut

        // crée le chemin et inclut le fichier de la vue souhaitée      
        include dirname(__DIR__) . '/Views/' . $path . '.php';

        // on vide le buffer dans la variable $content
        $content = ob_get_clean();

        // on fabrique le template
        switch ($path) {
            case 'houtai/index':
                include dirname(__DIR__) . '/Views/adminbase.php';
                break;
            case 'houtai/login':
                include dirname(__DIR__) . '/Views/loginbase.php';
                break;
            case 'error/index':
                include dirname(__DIR__) . '/Views/errorbase.php';
                break;
            default:
                include dirname(__DIR__) . '/Views/base.php';
                break;
        }
    }

    public function redirectedToRoute($controller, $action)
    {
        header('HTTP/1.0 301 Moved Permanently');
        header('Location: http://localhost/applications/projet-xbl/' . $controller . '/' . $action);
        header('Connection: close');
        die();
    }
}
