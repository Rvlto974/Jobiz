<?php

namespace App\Controller;

class Controller 
{

        protected function render(string $path, array $params = []): void
    {
        
        $filepath = APP_ROOT . "/templates/$path.php";
        
        
        
        if (file_exists($filepath)) {
            // Le fichier existe, on l'inclut
            extract($params); // Va tranformer les tableaux en variable//
            
            require_once $filepath;
            
            
        } else {
            
            echo "Le fichier $filepath n'existe pas";
            
        }
    }

    
}