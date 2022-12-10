<?php

declare(strict_types = 1);

namespace App\Providers;


use App\Exceptions\ViewNotFoundException;

class View{

    public function __construct(protected string $view, protected array $params = [])
    {

    }

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function render(): string
    {
        $viewFile = VIEW_PATH .'/'. $this->view . '.php';
        
        if(!file_exists($viewFile)){
            throw new ViewNotFoundException;
        }

        // foreach($this->params as $key=> $value){
        //     $$key = $value;
        // }

       extract($this->params);

        ob_start(); 

        include $viewFile;

        return (string)  ob_get_clean();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }

    public function __toString(): string 
    {
        return $this->render();
    }

    

}