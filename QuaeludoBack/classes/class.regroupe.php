<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Groupe.php');
require_once('class.Joueur.php');

class Regroupe extends Joueur implements JsonSerializable{
    private $lesJoueurs = array();

    public function __construct($id, $pseudo, $nom, $prenom, $datenaissance, $adressemail, $mdp, $image, $idcategorie){
        parent:: __construct($id, $pseudo, $nom, $prenom, $datenaissance, $adressemail, $mdp, $image, $idcategorie);
    }


    public function jsonSerialize(){
        $this->parent = parent::jsonSerialize($this);
        return get_object_vars($this);
    }
}