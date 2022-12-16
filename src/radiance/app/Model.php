<?php
namespace App;

use App\bootstrap\App;


class Model 
{
    public $db;

    public function __construct()
    {
        $this->db = App::db();
    }
}