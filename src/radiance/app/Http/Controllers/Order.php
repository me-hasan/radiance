<?php



namespace App\Http\Controllers;

use App\Providers\View;

class Order{

    public function index(): string 
    {
        return View::make('order/index');
    }
}