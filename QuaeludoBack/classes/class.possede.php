<?php
header("Access-Control-Allow-Origin: *");
class possede implements JsonSerializable{
    private $idjoueur = 0;
    private $idludotheque = 0;

    /**
     * possede constructor.
     * @param int $idjoueur
     * @param int $idludotheque
     */
    public function __construct($idjoueur, $idludotheque)
    {
        $this->idjoueur = $idjoueur;
        $this->idludotheque = $idludotheque;
    }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}
