<?php

class Groupe{
    public $nom = null;
    public $description = null;

    /**
     * Groupe constructor.
     * @param null $nom
     * @param null $description
     */
    public function __construct($nom, $description){
        echo '1';
        $this->nom = $nom;
        $this->description = $description;
        echo '2';
    }

    public function addIdGroupe(){
        echo '3';
        $pdo = new PDO('mysql:host=localhost;dbname=quaeludo','root','root');
        echo '4';
        $req = $pdo->prepare("INSERT INTO GROUPE(nom, description) VALUES (:nom, :description)");
        echo '5';
        $req->execute(
            array(
                ":nom" => $this->nom,
                ":description" => $this->description
            )
        );
        echo '6';


        //$req = "INSERT INTO GROUPE VALUES *";
    }
}