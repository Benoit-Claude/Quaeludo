<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Categorie.php');

class Joueur implements JsonSerializable{
    private $id = 0;
    private $pseudo = null;
    private $nom = null;
    private $prenom = null;
    private $datenaissance = null;
    private $adressemail = null;
    private $mdp = null;
    private $image = null;
    private $idcategorie = null;



    public function __construct($id, $pseudo, $nom, $prenom, $datenaissance, $adressemail, $mdp, $image, $idcategorie)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
        $this->adressemail = $adressemail;
        $this->mdp = $mdp;
        $this->image = $image;
        $this->idcategorie = $idcategorie;
    }

    public function getId()             {return $this->id;}
    public function getPseudo()         {return $this->pseudo;}
    public function getNom()            {return $this->nom;}
    public function getPrenom()         {return $this->prenom;}
    public function getDatenaissance()  {return $this->datenaissance;}
    public function getAdressemail()    {return $this->adressemail;}
    public function getMdp()            {return $this->mdp;}
    public function getImage()          {return $this->image;}
    public function getIdcategorie()    {return $this->idcategorie;}

    public function setId($id)                      {$this->id = $id;}
    public function setPseudo($pseudo)              {$this->pseudo = $pseudo;}
    public function setNom($nom)                    {$this->nom = $nom;}
    public function setPrenom($prenom)              {$this->prenom = $prenom;}
    public function setDatenaissance($datenaissance){$this->datenaissance = $datenaissance;}
    public function setAdressemail($adressemail)    {$this->adressemail = $adressemail;}
    public function setMdp($mdp)                    {$this->mdp = $mdp;}
    public function setImage($image)                {$this->image = $image;}
    public function setIdcategorie($idcategorie)    {$this->idcategorie = $idcategorie;}

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}