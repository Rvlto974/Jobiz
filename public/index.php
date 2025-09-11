<?php
require_once __DIR__ . "/../vendor/autoload.php";

//on definit une constante pour avoir le chemin racine de l'app//

define("APP_ROOT", dirname(__DIR__));



use App\Controller\PageController;

$pageController = new PageController();
$pageController->home();
?>