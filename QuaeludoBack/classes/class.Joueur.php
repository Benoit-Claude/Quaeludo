<?php

class Joueur{
    public $pseudo = null;
    public $nom = null;
    public $prenom = null;
    public $datenaissance = 0;
    public $adressemail = null;
    public $mdp = null;

    /**
     * Joueur constructor.
     * @param null $pseudo
     * @param null $nom
     * @param null $prenom
     * @param int $datenaissance
     * @param null $adressemail
     * @param null $mdp

     */
    public function __construct($pseudo, $nom, $prenom, $datenaissance, $adressemail, $mdp){
        $this->pseudo = $pseudo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
        $this->adressemail = $adressemail;
        $this->mdp = $mdp;
    }


    public function inscription(){
        $pdo = new PDO(
            'mysql:host=2y5qe.myd.infomaniak.com;port=3306;dbname=2y5qe_quaeludo;charset=utf8',
            '2y5qe_wp',
            'Hunt3rs_FR-56');



        $req = $pdo->prepare("INSERT INTO JOUEUR(pseudo, nom, prenom, datenaissance, adressemail, mdp) VALUES (:pseudo, :nom, :prenom, :datenaissance, :adressemail, :mdp)");
        $req->execute(
            array(
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