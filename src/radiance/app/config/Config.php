<?php

namespace App\config;

/**
 * @propery-read ?array $db
 */

class Config 
{

    protected array $config = [];

    public function __construct(array $env) 
    {
        $this->config = [
            'db' => [
                'driver'    =>$env['DB_DRIVER'],
                'host'      =>$env['DB_HOST'],
                'database'  =>$env['DB_DATABASE'],
                'port'      =>$env['DB_PORT'],
                'user'      =>$env['DB_USER'],
                'pass'      =>$env['DB_PASS']
            ]
        ];

    }


    public function __get(string $name)
    {
        return $this->config[$name] ?? null;
    }
}