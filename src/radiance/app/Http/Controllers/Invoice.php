<?php



namespace App\Http\Controllers;

use App\Providers\View;

class Invoice{

    public function index(): string 
    {
        return View::make('invoice/invoice', ['value'=>'hhhhhh', 'name'=>'Khayrul']);
    }
}