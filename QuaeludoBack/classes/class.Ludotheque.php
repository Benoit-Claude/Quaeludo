<?php
header("Access-Control-Allow-Origin: *");

class ludotheque implements JsonSerializable{
    private $idludo = 0;
    private $nomludo = null;
    private $imageludo = null;
    private $descriptionludo = null;
    private $idjoueur = null;

    /**
     * ludotheque constructor.
     * @param int $idludo
     * @param null $nomludo
     * @param null $imageludo
     * @param null $descriptionludo
     * @param null $idjoueur
     */
    public function __construct($idludo, $nomludo, $imageludo, $descriptionludo, $idjoueur)
    {
        $this->idludo = $idludo;
        $this->nomludo = $nomludo;
        $this->imageludo = $imageludo;
        $this->descriptionludo = $descriptionludo;
        $this->idjoueur = $idjoueur;
    }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}