<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.regroupe.php');

class Groupe implements JsonSerializable{
    private $id = 0;
    private $nom = null;
    private $desc = null;
    private $image = null;
    private $idjoueur = null;

    private $lesJoueurs = array();


    /**
     * Groupe constructor.
     * @param int $id
     * @param null $nom
     * @param null $desc
     * @param null $image
     * @param null $idjoueur
     * @param array $lesJoueurs
     */
    public function __construct($id, $nom, $desc, $image, $idjoueur){
        $this->id = $id;
        $this->nom = $nom;
        $this->desc = $desc;
        $this->image = $image;
        $this->idjoueur = $idjoueur;
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
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param null $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
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
    public function getIdjoueur()
    {
        return $this->idjoueur;
    }

    /**
     * @param null $idjoueur
     */
    public function setIdjoueur($idjoueur)
    {
        $this->idjoueur = $idjoueur;
    }

    /**
     * @return array
     */
    public function getLesJoueurs()
    {
        return $this->lesJoueurs;
    }

    /**
     * @param array $lesJoueurs
     */
    public function setLesJoueurs($lesJoueurs)
    {
        $this->lesJoueurs = $lesJoueurs;
    }




    public function jsonSerialize(){
        return get_object_vars($this);
    }
}