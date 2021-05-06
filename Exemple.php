<?php

// Utilisation du pattern singleton
// Instance unique d'une classe

// PATRON
// Un attribut privé et statique
// Un constructeur privé
// Une méthode static

class Exemple 
{

    private static $instance;

    private function __construct()
    {
        $this->uniq_id = uniqid();
    }

    // return différents ID
    // public static function getInstance():object
    // {
    //     return self::$instance = new Exemple();
    // }

    // avec patron return ID unique
    public static function getInstance():object
    {
        if(self::$instance === null){
            return self::$instance = new Exemple();
        }
        return self::$instance;
    }

}