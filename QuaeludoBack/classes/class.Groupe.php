<?php


class Groupe implements JsonSerializable{
    private $idgroupe = 0;
    private $nomgroupe = null;
    private $descriptiongroupe = null;
    private $imagegroupe = null;



    public function getIdgroupe()		      {return $this->idgroupe;}
    public function getNomgroupe()            {return $this->nomgroupe;}
    public function getDescriptiongroupe()    {return $this->descriptiongroupe;}
    public function getImagegroupe()          {return $this->imagegroupe;}

    public function setIdgroupe($idgroupe)		                {$this->idgroupe = $idgroupe;}
    public function setNomgroupe($nomgroupe)	                {$this->nomgroupe = $nomgroupe;}
    public function setDescriptiongroupe($descriptiongroupe)	{$this->descriptiongroupe = $descriptiongroupe;}
    public function setImagegroupe($imagegroupe)                {$this->imagegroupe = $imagegroupe;}

    public function jsonSerialize(){
        return get_object_vars($this);
    }

    /*public function addIdGroupe(){
        echo '3';
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=quaeludo','root','root');
        echo '4';
        $req = $pdo->prepare("INSERT INTO groupe(id, nom, description) VALUES (:id, :nom, :description)");
        echo '5';
        $req->execute(
            array(
                ":id" => $this->id,
                ":nom" => $this->nom,
                ":description" => $this->description
            )
        );
        echo '6';
        //$req = "INSERT INTO GROUPE VALUES *";
    }*/
}
