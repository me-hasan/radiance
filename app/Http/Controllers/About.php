<?php



namespace App\Http\Controllers;


class About{

    public function index(): string 
    {
        return 'About';
    }

    public function store()
    {
        var_dump($_POST);
    }
}