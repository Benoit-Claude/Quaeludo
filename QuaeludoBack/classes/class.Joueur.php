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

    /**
     * Joueur constructor.
     * @param int $id
     * @param null $pseudo
     * @param null $nom
     * @param null $prenom
     * @param null $datenaissance
     * @param null $adressemail
     * @param null $mdp
     * @param null $image
     * @param null $idcategorie
     */
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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param null $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return null
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param null $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param null $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return null
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * @param null $datenaissance
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }

    /**
     * @return null
     */
    public function getAdressemail()
    {
        return $this->adressemail;
    }

    /**
     * @param null $adressemail
     */
    public function setAdressemail($adressemail)
    {
        $this->adressemail = $adressemail;
    }

    /**
     * @return null
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param null $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return null
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param null $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return null
     */
    public function getIdcategorie()
    {
        return $this->idcategorie;
    }

    /**
     * @param null $idcategorie
     */
    public function setIdcategorie($idcategorie)
    {
        $this->idcategorie = $idcategorie;
    }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}