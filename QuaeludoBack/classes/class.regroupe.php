<?php
header("Access-Control-Allow-Origin: *");
class regroupe implements JsonSerializable{
    private $idjouueur = 0;
    private $idgroupe = 0;

    /**
     * regroupe constructor.
     * @param int $idjouueur
     * @param int $idgroupe
     */
    public function __construct($idjouueur, $idgroupe)
    {
        $this->idjouueur = $idjouueur;
        $this->idgroupe = $idgroupe;
    }


    public function jsonSerialize(){
        return get_object_vars($this);
    }
}
