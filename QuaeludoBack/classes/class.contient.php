<?php
header("Access-Control-Allow-Origin: *");

class contient implements JsonSerializable{
    private $idjeu = 0;
    private $idludotheque = 0;

    /**
     * contient constructor.
     * @param int $idjeu
     * @param int $idludotheque
     */
    public function __construct($idjeu, $idludotheque)
    {
        $this->idjeu = $idjeu;
        $this->idludotheque = $idludotheque;
    }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}
