<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Categorie.php');

class Jeu implements JsonSerializable{
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
     * @return int
     */
    public function getAgemin()
    {
        return $this->agemin;
    }

    /**
     * @param int $agemin
     */
    public function setAgemin($agemin)
    {
        $this->agemin = $agemin;
    }

    /**
     * @return int
     */
    public function getAgemax()
    {
        return $this->agemax;
    }

    /**
     * @param int $agemax
     */
    public function setAgemax($agemax)
    {
        $this->agemax = $agemax;
    }

    /**
     * @return int
     */
    public function getDureemin()
    {
        return $this->dureemin;
    }

    /**
     * @param int $dureemin
     */
    public function setDureemin($dureemin)
    {
        $this->dureemin = $dureemin;
    }

    /**
     * @return int
     */
    public function getDureemax()
    {
        return $this->dureemax;
    }

    /**
     * @param int $dureemax
     */
    public function setDureemax($dureemax)
    {
        $this->dureemax = $dureemax;
    }

    /**
     * @return int
     */
    public function getJoueurmin()
    {
        return $this->joueurmin;
    }

    /**
     * @param int $joueurmin
     */
    public function setJoueurmin($joueurmin)
    {
        $this->joueurmin = $joueurmin;
    }

    /**
     * @return int
     */
    public function getJoueurmax()
    {
        return $this->joueurmax;
    }

    /**
     * @param int $joueurmax
     */
    public function setJoueurmax($joueurmax)
    {
        $this->joueurmax = $joueurmax;
    }

    /**
     * @return null
     */
    public function getLienaffilie()
    {
        return $this->lienaffilie;
    }

    /**
     * @param null $lienaffilie
     */
    public function setLienaffilie($lienaffilie)
    {
        $this->lienaffilie = $lienaffilie;
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

    /**
     * @return array
     */
    public function getLesCategorie()
    {
        return $this->lesCategorie;
    }

    /**
     * @param array $lesCategorie
     */
    public function setLesCategorie($lesCategorie)
    {
        $this->lesCategorie = $lesCategorie;
    }
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

    /**
     * Jeu constructor.
     * @param int $id
     * @param null $nom
     * @param null $image
     * @param null $desc
     * @param int $agemin
     * @param int $agemax
     * @param int $dureemin
     * @param int $dureemax
     * @param int $joueurmin
     * @param int $joueurmax
     * @param null $lienaffilie
     * @param null $idcategorie
     */
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




    public function jsonSerialize(){
        return get_object_vars($this);
    }
}