<?php

namespace App\Entity;

class Arme
{

    private $nom;
    private $description;
    private $degat;

    public static $armes = [];

    public function __construct($nom, $description, $degat)
    {
        $this->nom = $nom;
        $this->description = $description;
        $this->degat = $degat;
        self::$armes[] = $this;
    }

    // fonction permettant de recuperer les informations dans fonction privé
    public function getNom()
    {
        return $this->nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDegat()
    {
        return $this->degat;
    }


    // fonction permettant d'envoyer les informations dans fonction privé
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this->description;
    }

    public function setDegat($degat)
    {
        $this->degat = $degat;
        return $this->degat;
    }


    //  fonction qui permet la création des armes
    public static function creerArme()
    {
        new arme("épéé", "Une superbe épée tranchante", 10);
        new arme("hache", "Une arme ou un outil", 15);
        new arme("arc", "Une arme à distance", 7);
    }

    public static function getArmeParNom($nom)
    {
        foreach (self::$armes as $arme) {
            if (strtolower(str_replace("é", "e", $arme->nom)) === $nom) {
                return $arme;
            }
        }
    }
}