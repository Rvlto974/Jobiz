<?php

//Charger autoload//




namespace App\Controller;

class PageController
{
    public function home(): void
    {
        $this->render("page/home");
    }

    public function about(): void
    {
        $this->render("page/about");
    }

    protected function render(string $path): void
    {
        $filepath = APP_ROOT . "/templates/$path.php";

        if (file_exists($filepath)) {
            require_once $filepath;
        } else {
            echo "Le fichier $filepath n'existe pas";
        }
    }
}
