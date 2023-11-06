<?php

// fichier avec des fonctions utilitaires

class Functions 
{
    public static function genererPage($data)
    {
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    public static function afficherTableau($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public static function ajouterMessageAlerte($message, $type)
    {
        $_SESSION['alert'][] = [
            "message" => $message,
            "type" => $type
        ];
    }
}
