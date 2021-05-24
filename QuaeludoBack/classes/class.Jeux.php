<?php
header("Access-Control-Allow-Origin: *");

class Jeu implements JsonSerializable{
    private $idjeu = 0;
    private $nomjeu = null;
    private $imagejeu = null;
    private $descriptionjeu = null;
    private $agemin = 0;
    private $agemax = 99;
    private $dureemin = 0;
    private $dureemax = 0;
    private $joueurmin = 1;
    private $joueurmax= 99;
    private $lien = null;
    private $idcategorie = 0;

    /**
     * Jeu constructor.
     * @param int $idjeu
     * @param null $nomjeu
     * @param null $imagejeu
     * @param null $descriptionjeu
     * @param int $agemin
     * @param int $agemax
     * @param int $dureemin
     * @param int $dureemax
     * @param int $joueurmin
     * @param int $joueurmax
     * @param null $lien
     * @param int $idcategorie
     */
    public function __construct($idjeu, $nomjeu, $imagejeu, $descriptionjeu, $agemin, $agemax, $dureemin, $dureemax,  $joueurmin, $joueurmax, $lien, $idcategorie)
    {
        $this->idjeu = $idjeu;
        $this->nomjeu = $nomjeu;
        $this->imagejeu = $imagejeu;
        $this->descriptionjeu = $descriptionjeu;
        $this->agemin = $agemin;
        $this->agemax = $agemax;
        $this->dureemin = $dureemin;
        $this->dureemax = $dureemax;
        $this->joueurmin = $joueurmin;
        $this->joueurmax = $joueurmax;
        $this->lien = $lien;
        $this->idcategorie = $idcategorie;
    }


    public function getIdjeu()		        {return $this->idjeu;}
    public function getNomjeu()             {return $this->nomjeu;}
    public function getimagejeu()           {return $this->imagejeu;}
    public function getDescriptionjeu()     {return $this->descriptionjeu;}
    public function getagemin()             {return $this->agemin;}
    public function getagemax()             {return $this->agemax;}
    public function getdureemin()           {return $this->dureemin;}
    public function getdureemax()           {return $this->dureemax;}
    public function getjoueurmin()          {return $this->joueurmin;}
    public function getjoueurmax()          {return $this->joueurmax;}
    public function getlien()               {return $this->lien;}
    public function getidcategorie()        {return $this->idcategorie;}

    public function setIdjoueur ($idjoueur)		            {$this->id = $idjoueur;}
    public function setPseudo ($pseudo)		                {$this->pseudo = $pseudo;}
    public function setNomjoueur ($nomjoueur)	            {$this->nomjoueur  = $nomjoueur;}
    public function setPrenom ($prenom)	                    {$this->prenom = $prenom;}
    public function setDescriptionjoueur ($datenaissance)	{$this->datenaissance = $datenaissance;}
    public function setAdresseMail ($adressemail)	        {$this->adressemail = $adressemail;}
    public function setimagejoueur($imagejoueur)            {$this->imagejoueur = $imagejoueur;}
    public function setidcategorie($idcategorie)            {$this->idcategorie = $idcategorie;}


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}