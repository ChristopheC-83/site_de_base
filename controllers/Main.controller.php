<?php

require_once("./models/MainManager.model.php");
require_once("./controllers/Functions.controller.php");




class MainController
{

    // l'injection de cette dépendance permet d'utiliser 
    // dans les controller en charge d'afficher les pages les fonctions :
    // genererPage, afficherTableau, ajouterMessageAlerte
    // private $functions;
    private $mainManager;
    public function __construct()
    {
        $this->mainManager = new MainManager();
    }



    // mainController répertorie les pages avec leurs infos respectives

    public function pageAccueil()
    {


        $data_page = [
            "page_description" => "Description accueil",
            "page_title" => "titre accueil",
            "view" => "views/pages/public/accueil.view.php",
            "template" => "views/commons/template.php",
            "css" => "accueilContainer",
            "variable_de_demo" => "demo de variable"

        ];
        Functions::genererPage($data_page);
    }
    public function pageErreur($msg)
    {

        $data_page = [
            "page_description" => "Erreur !",
            "page_title" => "Erreur !",
            "view" => "views/pages/public/erreur.view.php",
            "template" => "views/commons/template.php",
            "msg" => $msg,
        ];
        Functions::genererPage($data_page);
    }
    public function page1()
    {

        $datas = $this->mainManager->getThemes();
        Functions::ajouterMessageAlerte("coucou", "vert");
        
        Functions::ajouterMessageAlerte("coucou", "rouge");  // test alerte
        Functions::ajouterMessageAlerte("coucoucoucoucoucoucoucou", "vert");
        
        Functions::ajouterMessageAlerte("coucou", "rouge");  // test alerte
        $data_page = [
            "page_description" => "Description Page 1",
            "page_title" => "titre page 1",
            "datas" => $datas,
            "js" => ["alert.js"],
            "view" => "views/pages/public/page1.view.php",
            "template" => "views/commons/template.php",
        ];
        Functions::genererPage($data_page);
    }
    public function page2()
    {
        Functions::ajouterMessageAlerte("coucou", "vert");
        $data_page = [
            "page_description" => "Description Page 2",
            "page_title" => "titre page 2",
            "view" => "views/pages/public/page2.view.php",
            "template" => "views/commons/template.php",
            "js" => [""],
        ];
        Functions::genererPage($data_page);
    }
    public function page3()
    {
        $data_page = [
            "page_description" => "Description Page 3",
            "page_title" => "titre page 3",
            "view" => "views/pages/public/page3.view.php",
            "template" => "views/commons/template.php",
            "js" => [""],

        ];
        Functions::genererPage($data_page);
    }
    public function pageConnexion()
    {
        $data_page = [
            "page_description" => "Description Page Connexion",
            "page_title" => "titre page Connexion",
            "view" => "views/pages/public/pageConnexion.view.php",
            "template" => "views/commons/template.php"

        ];
        Functions::genererPage($data_page);
    }
}
