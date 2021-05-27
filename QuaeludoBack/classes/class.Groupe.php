<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.regroupe.php');

class Groupe implements JsonSerializable{
    private $id = 0;
    private $nom = null;
    private $desc = null;
    private $image = null;
    private $idjoueur = 0;

    private $lesJoueurs = array();




    public function __construct($id, $nom, $desc, $image, $idjoueur){
        $this->id = $id;
        $this->nom = $nom;
        $this->desc = $desc;
        $this->image = $image;
        $this->idjoueur = $idjoueur;
    }


    public function getId()         {return $this->id;}
    public function getNom()        {return $this->nom;}
    public function getDesc()       {return $this->desc;}
    public function getImage()      {return $this->image;}
    public function getIdjoueur()   {return $this->idjoueur;}
    public function getLesJoueurs() {return $this->lesJoueurs;}

    public function setId($id)                  {$this->id = $id;}
    public function setNom($nom)                {$this->nom = $nom;}
    public function setDesc($desc)              {$this->desc = $desc;}
    public function setImage($image)            {$this->image = $image;}
    public function setIdjoueur($idjoueur)      {$this->idjoueur = $idjoueur;}
    public function setLesJoueurs($lesJoueurs)  {$this->lesJoueurs = $lesJoueurs;}



    public function jsonSerialize(){
        return get_object_vars($this);
    }
}