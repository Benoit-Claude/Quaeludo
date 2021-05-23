<?php

class Groupe{
    public $id = 0;
    public $nom = null;
    public $description = null;

    /**
     * Groupe constructor.
     * @param 0 $id
     * @param null $nom
     * @param null $description
     */
    public function __construct($id, $nom, $description){
        echo '1';
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        echo '2';
    }

    public function addIdGroupe(){
        echo '3';
        $pdo = new PDO('mysql:host=localhost;port=8889;dbname=QuaeLudo','root','root');
        echo '4';
        $req = $pdo->prepare("INSERT INTO GROUPE(id, nom, description) VALUES (:nom, :description)");
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
    }
}

