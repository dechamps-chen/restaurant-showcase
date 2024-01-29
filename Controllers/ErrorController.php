<?php

namespace App\Controllers;

class ErrorController extends Controller
{

    public function index()
    {
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        // $this->render('error/index');
    }
}
