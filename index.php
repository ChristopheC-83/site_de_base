<?php
//Dès la connexion à ce site, toujours par ce point "index.php"
// on démarre une SESSION
session_start();

// pour toujours repartir de la base du site on ecrira au début de nos liens (image ou autre...) :
// URL dans des balises php
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https"  : "http") . "://" . $_SERVER['HTTP_HOST'] .
    $_SERVER["PHP_SELF"]));


require_once("./controllers/Functions.controller.php");
$functions = new Functions();
require_once("./controllers/Main.controller.php");
$mainController = new MainController();


// l'index est le point d'entrée du site
// au lieu d'avoir, ex pour page d'accueil
// site/index.php?page=accueil
//  on utilise htaccess pour obtenir :
//  site/accueil 
// ce qui est plus convivial et lisible

try {
    if (empty($_GET['page'])) {
        $url[0] = "accueil";
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch ($url[0]) {
        case "accueil":
            $mainController->pageAccueil();
            break;
        case "page1":
            $mainController->page1();
            break;
        case "page2":
            $mainController->page2();

            break;
        case "page3":
            $mainController->page3();
            break;
        case "pageConnexion":
            $mainController->pageConnexion();
            break;
        default:
            throw new Exception("La page demandée n'existe pas...");
    }
} catch (Exception $msg) {
    $MainController->pageErreur($msg->getMessage());
}
