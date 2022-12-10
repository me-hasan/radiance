<?php



namespace App\Http\Controllers;

use App\Providers\View;

class Payment{

    public function index(): string 
    {
        return 'payment';
    }

    public function create()
    {
       
        return View::make('payment/create');
    }

    public function store(): string 
    {
        var_dump($_POST);
        return '';
    }
}