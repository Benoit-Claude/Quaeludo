<?php
header("Access-Control-Allow-Origin: *");
class classe implements JsonSerializable{
    private $idjeu = 0;
    private $idcategorie = 0;

    /**
     * classe constructor.
     * @param int $idjeu
     * @param int $idcategorie
     */
    public function __construct($idjeu, $idcategorie)
    {
        $this->idjeu = $idjeu;
        $this->idcategorie = $idcategorie;
    }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}
