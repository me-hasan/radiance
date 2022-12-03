<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';



use App\Providers\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;



$router = new Route();

$router
    ->get('/home', [Home::class, 'index'])
    ->get('/about', [About::class, 'index'])
    ->get('/about/create', [About::class, 'store'])
;


echo $router->resolve($_SERVER['REQUEST_URI'], mb_strtolower($_SERVER['REQUEST_METHOD']));
