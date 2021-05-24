<?php
echo "// je suis class.Groupe.php //";

class Groupe implements JsonSerializable{
    private $idgroupe = 0;
    private $nomgroupe = null;
    private $descriptiongroupe = null;
    private $imagegroupe = null;
    private $idjoueur = 0;

    /**
     * Groupe constructor.
     * @param int $idgroupe
     * @param null $nomgroupe
     * @param null $descriptiongroupe
     * @param null $imagegroupe
     * @param int $idjoueur
     */
    public function __construct($idgroupe, $nomgroupe, $descriptiongroupe, $imagegroupe, $idjoueur)
    {
        $this->idgroupe = $idgroupe;
        $this->nomgroupe = $nomgroupe;
        $this->descriptiongroupe = $descriptiongroupe;
        $this->imagegroupe = $imagegroupe;
        $this->idjoueur = $idjoueur;
    }


    public function getidgroupe()		      {return $this->idgroupe;}
    public function getnomgroupe()            {return $this->nomgroupe;}
    public function getdescriptiongroupe()    {return $this->descriptiongroupe;}
    public function getimagegroupe()          {return $this->imagegroupe;}
    public function getidjoueur()             {return $this->idjoueur;}

    public function setidgroupe($idgroupe)		                {$this->idgroupe = $idgroupe;}
    public function setnomgroupe($nomgroupe)	                {$this->nomgroupe = $nomgroupe;}
    public function setdescriptiongroupe($descriptiongroupe)	{$this->descriptiongroupe = $descriptiongroupe;}
    public function setimagegroupe($imagegroupe)                {$this->imagegroupe = $imagegroupe;}
    public function setidjoueur($idjoueur)                      {$this->idjoueur = $idjoueur;}


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
