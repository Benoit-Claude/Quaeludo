<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.contient.php');
require_once('class.possede.php');

class Ludotheque implements JsonSerializable{
    private $id = 0;
    private $nom = null;
    private $desc = null;
    private $image = null;
    private $idcategorie = 0;

    private $lesJeux = array();
    private $lesProprietaire = array();




    public function __construct($id, $nom, $desc, $image,$idcategorie){
        $this->id = $id;
        $this->nom = $nom;
        $this->desc = $desc;
        $this->image = $image;
        $this->idcategorie = $idcategorie;
    }


    public function getId()             {return $this->id;}
    public function getNom()            {return $this->nom;}
    public function getDesc()           {return $this->desc;}
    public function getImage()          {return $this->image;}
    public function getidcategorie()    {return $this->idcategorie;}
    public function getLesJeux()        {return $this->lesJeux;}
    public function getLesProprietaire(){return $this->lesProprietaire;}

    public function setId($id)                          {$this->id = $id;}
    public function setNom($nom)                        {$this->nom = $nom;}
    public function setDesc($desc)                      {$this->desc = $desc;}
    public function setImage($image)                    {$this->image = $image;}
    public function setidcategorie($idcategorie)              {$this->idcategorie = $idcategorie;}
    public function setLesJeux($lesJeux)                {$this->lesJeux = $lesJeux;}
    public function setLesProprietaire($lesProprietaire){$this->lesProprietaire = $lesProprietaire;}



    public function jsonSerialize(){
        return get_object_vars($this);
    }
}