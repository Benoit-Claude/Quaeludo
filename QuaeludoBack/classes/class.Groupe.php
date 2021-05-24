<?php


class Groupe implements JsonSerializable{
    private $id = 0;
    private $nom = null;
    private $description = null;

    /**
     * Groupe constructor.
     * @param int $id
     * @param null $nom
     * @param null $description
     */
    public function __construct($id, $nom, $description){
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function getId()		        {return $this->id;}
    public function getNom()            {return $this->nom;}
    public function getDescription()    {return $this->description;}

    public function setId($id)		                {$this->id = $id;}
    public function setNom($nom)	                {$this->nom = $nom;}
    public function setDescription($description)	{$this->description = $description;}

    public function jsonSerialize(){
        return get_object_vars($this);
    }

    /*public function addIdGroupe(){
        echo '3';
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=quaeludo','root','root');
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
    }*/
}

