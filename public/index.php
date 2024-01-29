<?php

use App\Autoloader;
use App\Core\Routeur;

include '../Autoloader.php';
Autoloader::register();

$route = new Routeur();

$route->routes();
