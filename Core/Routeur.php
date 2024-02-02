<?php

namespace App\Core;

class Routeur
{
    public function routes()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $controller = (isset($_GET['controller'])) ? ucfirst(array_shift($_GET)) : 'home';
        $controller = '\\App\\Controllers\\' . $controller . 'Controller';

        $action = (isset($_GET['action'])) ? array_shift($_GET) : 'index';

        if (class_exists($controller)) {
            $controllerInstance = new $controller();

            if (method_exists($controllerInstance, $action)) {
                (isset($_GET)) ? call_user_func_array([$controllerInstance, $action], $_GET) : $controllerInstance->$action();
            } else {
                $this->redirectToErrorPage();
            }
        } else {
            $this->redirectToErrorPage();
        }
    }

    private function redirectToErrorPage()
    {
        http_response_code(404);
        header("Location: http://localhost/applications/projet-xbl/error");
        exit;
    }
}
