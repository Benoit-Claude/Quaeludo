<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once('class.Joueur.php');

class Ludotheque implements JsonSerializable{
    private $id = 0;
    private $adresseMail = null;

    /**
     * Ludotheque constructor.
     * @param int $id
     * @param null $adresseMail
     */
    public function __construct($id, $adresseMail)
    {
        $this->id = $id;
        $this->adresseMail = $adresseMail;
    }

    /**
     * @return int
     */
    public function getId(){return $this->id;}

    /**
     * @param int $id
     */
    public function setId($id){$this->id = $id;}

    /**
     * @return null
     */
    public function getAdresseMail(){return $this->adresseMail;}

    /**
     * @param null $adresseMail
     */
    public function setAdresseMail($adresseMail){$this->adresseMail = $adresseMail;}




    public function jsonSerialize(){
        return get_object_vars($this);
    }
}