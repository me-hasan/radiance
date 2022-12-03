<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';



use App\Providers\Route;
use App\Http\Home;
use App\Http\About;



$router = new Route();
$router
    ->register('/', [Home::class, 'index'])
    ->register('/about', [About::class, 'index'])
;


echo $router->resolve($_SERVER['REQUEST_URI']);
