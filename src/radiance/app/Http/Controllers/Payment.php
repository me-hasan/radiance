<?php



namespace App\Http\Controllers;

use App\Providers\View;
use App\bootstrap\App;
use PDO;
use App\model\User;

class Payment{

    public function index(): string 
    {
        return 'payment';
    }

    public function create()
    {
        $user = new User();

        $user->all();
        
         
        return View::make('payment/create');
    }

    public function store(): string 
    {
        var_dump($_POST);
        return '';
    }
}