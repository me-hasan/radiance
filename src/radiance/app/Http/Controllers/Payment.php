<?php



namespace App\Http\Controllers;

use App\Providers\View;
use PDO;


class Payment{

    public function index(): string 
    {
        return 'payment';
    }

    public function create()
    {
        // var_dump($_ENV['DB_HOST']);
        // phpinfo();
        $db = new PDO(
            'mysql:host='.$_ENV['DB_HOST'].
            ';port='.$_ENV['DB_PORT'].
            ';dbname='.$_ENV['DB_DATABASE'].'', $_ENV['DB_USER'], $_ENV['DB_PASS'], []);

        var_dump($db);
       
        return View::make('payment/create');
    }

    public function store(): string 
    {
        var_dump($_POST);
        return '';
    }
}