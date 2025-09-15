<?php

//Charger autoload//





namespace App\Controller;

class PageController
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

    protected function render(string $path, array $params = []): void
    {
        extract($params); // Essentiel pour rendre les variables disponibles
        
        $filepath = APP_ROOT . "/templates/$path.php";

        if (file_exists($filepath)) {
            require_once $filepath;
        } else {
            echo "Le fichier $filepath n'existe pas";
        }
    }
}