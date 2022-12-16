<?php

namespace App\Model;

use App\Model;
use PDO;

class User extends Model
{

    public function all()
    {
        
        
        $query = 'SELECT * from user';
        
        
        foreach($this->db->query($query)->fetchAll(PDO::FETCH_OBJ) as $user){
            echo '<pre>';
            var_dump($user);
        }
    }
}