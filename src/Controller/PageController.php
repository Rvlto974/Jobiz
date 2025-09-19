<?php

//Charger autoload//





namespace App\Controller;

class PageController extends Controller
{
    public function home(): void
    {
        $greeting = "hello";
        $name = "John";

        $this->render("page/home", [
            "greetings" => $greeting, 
            "name" => $name
        ]);
    }

    public function about() : void
    {
        $this->render("page/about");
    }
    
    


}