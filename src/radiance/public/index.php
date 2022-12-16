<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



require_once __DIR__ . '/../vendor/autoload.php';




$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


session_start();


define('VIEW_PATH', __DIR__ . '/../views');


use App\Providers\Router;
use App\Http\Controllers\Order;
use App\Http\Controllers\Payment;
use App\Http\Controllers\Invoice;
use App\bootstrap\App;
use App\config\Config;

$router = new Router();

$router
    ->get('/order', [Order::class, 'index'])
    ->get('/payment', [Payment::class, 'index'])
    ->get('/payment/create', [Payment::class, 'create'])
    ->post('/payment/save', [Payment::class, 'store'])
    ->get('/invoice', [Invoice::class, 'index'])
;

// echo '<pre>';
// $check = new Config($_ENV);
// print_r($check);

(new App($router, ['uri'=>$_SERVER['REQUEST_URI'], 'method'=> $_SERVER['REQUEST_METHOD']],
 new Config($_ENV)
))->run();
