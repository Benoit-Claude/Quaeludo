<?php

class Joueur{
    public $id = 0;
    public $pseudo = null;
    public $nom = null;
    public $prenom = null;
    public $datenaissance = 0;
    public $adressemail = null;
    public $mdp = null;

    /**
     * Joueur constructor.
     * @param int $id
     * @param null $pseudo
     * @param null $nom
     * @param null $prenom
     * @param int $datenaissance
     * @param null $adressemail
     * @param null $mdp

     */
    public function __construct($id, $pseudo, $nom, $prenom, $datenaissance, $adressemail, $mdp){
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
        $this->adressemail = $adressemail;
        $this->mdp = $mdp;
    }

    public function getId()		        {return $this->id;}
    public function getPseudo()		    {return $this->pseudo;}
    public function getNom()            {return $this->nom;}
    public function getPrenom()         {return $this->prenom;}
    public function getDatenaissance()  {return $this->datenaissance;}
    public function getAdressemail()    {return $this->adressemail;}

    public function setId($id)		                {$this->id = $id;}
    public function setPseudo($pseudo)		        {$this->pseudo = $pseudo;}
    public function setNom($nom)	                {$this->nom = $nom;}
    public function setNom($prenom)	                {$this->prenom = $prenom;}
    public function setDescription($datenaissance)	{$this->datenaissance = $datenaissance;}
    public function setDescription($adressemail)	{$this->adressemail = $adressemail;}

    public function jsonSerialize(){
        return get_object_vars($this);
    }




    public function inscription(){
        $pdo = new PDO(
            'mysql:host=2y5qe.myd.infomaniak.com;port=3306;dbname=2y5qe_quaeludo;charset=utf8',
            '2y5qe_wp',
            'Hunt3rs_FR-56');



        $req = $pdo->prepare("INSERT INTO JOUEUR(pseudo, nom, prenom, datenaissance, adressemail, mdp) VALUES (:pseudo, :nom, :prenom, :datenaissance, :adressemail, :mdp)");
        $req->execute(
            array(
                ":id" => $this->id,
                ":pseudo" => $this->pseudo,
                ":nom" => $this->nom,
                ":prenom" => $this->prenom,
                ":datenaissance" => $this->datenaissance,
                ":adressemail" => $this->adressemail,
                ":mdp" => $this->mdp
            )
        );


    }
}