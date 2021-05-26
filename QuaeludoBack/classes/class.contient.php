<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Ludotheque.php');
require_once('class.Jeu.php');

class Contient extends Jeu implements JsonSerializable{
    private $lesJeu = array();

    public function __construct($id, $nom, $image, $desc, $agemin, $agemax, $dureemin, $dureemax, $joueurmin, $joueurmax, $lienaffilie, $idcategorie)
    {
        parent::__construct($id, $nom, $image, $desc, $agemin, $agemax, $dureemin, $dureemax, $joueurmin, $joueurmax, $lienaffilie, $idcategorie);
    }


    public function jsonSerialize(){
        $this->parent = parent::jsonSerialize($this);
        return get_object_vars($this);
    }
}