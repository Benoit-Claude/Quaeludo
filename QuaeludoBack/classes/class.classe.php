<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Categorie.php');
require_once('class.Ludotheque.php');

class Classe extends Categorie implements JsonSerializable{
    private $lesCategorie = array();


    public function __construct($id, $nom, $desc, $image)
    {
        parent::__construct($id, $nom, $desc, $image);
    }


    public function jsonSerialize(){
        $this->parent = parent::jsonSerialize($this);
        return get_object_vars($this);
    }
}