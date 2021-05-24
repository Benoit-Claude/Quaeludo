<?php
    header("Access-Control-Allow-Origin: *");

    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'Classes/class.Groupe.php';



//Ordre SQL
$query = "SELECT * 
            FROM groupe
            ORDER BY ID_GROUPE";

//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeGroupes = array();
//Exécution
if($requete->execute()){
    while($donnees = $requete->fetch()){
        $groupe = new Groupe(
            $donnees["ID_GROUPE"],
            $donnees["NOM_GROUPE"],
            $donnees["DESC_GROUPE"],
            $donnees["IMAGE_GROUPE"],
            $donnees["ID_JOUEUR"]
        );
        $listeGroupes[] = $groupe;
    }

}else{
    echo 'Requete failed';
}
echo "<pre>";
print_r($listeGroupes);
echo "</pre>";