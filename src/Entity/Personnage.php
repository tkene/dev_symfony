<?php

namespace App\Entity;

class Personnage
{

    public $nom;
    public $age;
    public $sexe;
    public $carac = [];


    public static $personnages = [];


    public function __construct($nom, $age, $sexe, $carac)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;
        self::$personnages[] = $this;
    }

    public static function creerPersonnages()
    {
        $p1 = new Personnage("Marc", 25, true, [
            "force" => 3,
            "agil" => 15,
            "intelligence" => 50
        ]);
        $p2 = new Personnage("Milo", 30, true, [
            "force" => 3,
            "agil" => 15,
            "intelligence" => 50
        ]);
        $p3 = new Personnage("Tya", 22, false, [
            "force" => 1,
            "agil" => 20,
            "intelligence" => 50
        ]);
    }

    public static function getPersonnagesParNom($nom)
    {

        //strtolower -> permet de transformer les majuscules en miniscule
        foreach (self::$personnages as $perso) {
            if (strtolower($perso->nom) === $nom) {
                return $perso;
            }
        }
    }
}