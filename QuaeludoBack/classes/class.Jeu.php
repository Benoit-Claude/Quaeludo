<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Categorie.php');

class Jeu implements JsonSerializable{
    private $id = 0;
    private $nom = null;
    private $image = null;
    private $desc = null;
    private $agemin = 0;
    private $agemax = 99;
    private $dureemin = 0;
    private $dureemax = 0;
    private $joueurmin = 1;
    private $joueurmax = 1;
    private $lienaffilie = null;
    private $idcategorie = null;

    private $lesCategorie = array();

    public function __construct($id, $nom, $image, $desc, $agemin, $agemax, $dureemin, $dureemax, $joueurmin, $joueurmax, $lienaffilie, $idcategorie)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->image = $image;
        $this->desc = $desc;
        $this->agemin = $agemin;
        $this->agemax = $agemax;
        $this->dureemin = $dureemin;
        $this->dureemax = $dureemax;
        $this->joueurmin = $joueurmin;
        $this->joueurmax = $joueurmax;
        $this->lienaffilie = $lienaffilie;
        $this->idcategorie = $idcategorie;
    }

    public function getId()             {return $this->id;}
    public function getNom()            {return $this->nom;}
    public function getImage()          {return $this->image;}
    public function getDesc()           {return $this->desc;}
    public function getAgemin()         {return $this->agemin;}
    public function getAgemax()         {return $this->agemax;}
    public function getDureemin()       {return $this->dureemin;}
    public function getDureemax()       {return $this->dureemax;}
    public function getJoueurmin()      {return $this->joueurmin;}
    public function getJoueurmax()      {return $this->joueurmax;}
    public function getLienaffilie()    {return $this->lienaffilie;}
    public function getIdcategorie()    {return $this->idcategorie;}
    public function getLesCategorie()   {return $this->lesCategorie;}

    public function setId($id)                      {$this->id = $id;}
    public function setNom($nom)                    {$this->nom = $nom;}
    public function setImage($image)                {$this->image = $image;}
    public function setDesc($desc)                  {$this->desc = $desc;}
    public function setAgemin($agemin)              {$this->agemin = $agemin;}
    public function setAgemax($agemax)              {$this->agemax = $agemax;}
    public function setDureemin($dureemin)          {$this->dureemin = $dureemin;}
    public function setDureemax($dureemax)          {$this->dureemax = $dureemax;}
    public function setJoueurmin($joueurmin)        {$this->joueurmin = $joueurmin;}
    public function setJoueurmax($joueurmax)        {$this->joueurmax = $joueurmax;}
    public function setLienaffilie($lienaffilie)    {$this->lienaffilie = $lienaffilie;}
    public function setIdcategorie($idcategorie)    {$this->idcategorie = $idcategorie;}
    public function setLesCategorie($lesCategorie)  {$this->lesCategorie = $lesCategorie;}




    public function jsonSerialize(){
        return get_object_vars($this);
    }
}