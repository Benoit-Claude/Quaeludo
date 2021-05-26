<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Categorie.php');

class Ludotheque implements JsonSerializable{
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
    private $desc = null;
    private $image = null;

    private $lesCategorie = array();

    /**
     * Ludotheque constructor.
     * @param int $id
     * @param null $nom
     * @param null $desc
     * @param null $image
     */
    public function __construct($id, $nom, $desc, $image)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->desc = $desc;
        $this->image = $image;
    }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}