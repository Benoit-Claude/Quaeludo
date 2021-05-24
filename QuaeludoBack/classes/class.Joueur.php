<?php
header("Access-Control-Allow-Origin: *");

class Joueur implements JsonSerializable{
    private $idjoueur = 0;
    private $pseudo = null;
    private $nomjoueur = null;
    private $prenom = null;
    private $datenaissance = 0;
    private $adressemail = null;
    private $mdp = null;
    private $imagejoueur = null;
    private $idcategorie = 0;

    /**
     * Joueur constructor.
     * @param int $idjoueur
     * @param null $pseudo
     * @param null $nomjoueur
     * @param null $prenom
     * @param int $datenaissance
     * @param null $adressemail
     * @param null $mdp
     * @param null $imagejoueur
     * @param int $idcategorie
     */
    public function __construct($idjoueur, $pseudo, $nomjoueur, $prenom, $datenaissance, $adressemail, $mdp, $imagejoueur, $idcategorie)
    {
        $this->idjoueur = $idjoueur;
        $this->pseudo = $pseudo;
        $this->nomjoueur = $nomjoueur;
        $this->prenom = $prenom;
        $this->datenaissance = $datenaissance;
        $this->adressemail = $adressemail;
        $this->mdp = $mdp;
        $this->imagejoueur = $imagejoueur;
        $this->idcategorie = $idcategorie;
    }


    public function getIdjoueur()		  {return $this->idjoueur;}
    public function getPseudo()		      {return $this->pseudo;}
    public function getNomjoueur()        {return $this->nomjoueur;}
    public function getPrenom()           {return $this->prenom;}
    public function getDatenaissance()    {return $this->datenaissance;}
    public function getAdressemail()      {return $this->adressemail;}
    public function getimagejoueur()      {return $this->imagejoueur;}
    public function getidcategorie()      {return $this->idcategorie;}

    public function setIdjoueur($idjoueur)		            {$this->id = $idjoueur;}
    public function setPseudo($pseudo)		                {$this->pseudo = $pseudo;}
    public function setNomjoueur($nomjoueur)	            {$this->nomjoueur = $nomjoueur;}
    public function setPrenom($prenom)	                    {$this->prenom = $prenom;}
    public function setDescriptionjoueur($datenaissance)	{$this->datenaissance = $datenaissance;}
    public function setAdresseMail($adressemail)	        {$this->adressemail = $adressemail;}
    public function setimagejoueur($imagejoueur)            {$this->imagejoueur = $imagejoueur;}
    public function setidcategorie($idcategorie)            {$this->idcategorie = $idcategorie;}


    public function jsonSerialize(){
        return get_object_vars($this);
    }




    /*public function inscription(){
        $pdo = new PDO(
            'mysql:host=2y5qe.myd.infomaniak.com;port=3306;dbname=2y5qe_quaeludo;charset=utf8',
            '2y5qe_wp',
            'Hunt3rs_FR-56');



        $req = $pdo->prepare("INSERT INTO joueur(ID, PSEUDO, NOM_JOUEUR, PRENOM, DATENAISSANCE, ADRESSEMAIL, MDP) VALUES (:id, :pseudo, :nom, :prenom, :datenaissance, :adressemail, :mdp)");
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


    }*/
}