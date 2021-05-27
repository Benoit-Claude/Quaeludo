<?php
header("Access-Control-Allow-Origin: *");

    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'Classes/class.contient.php';



//Ordre SQL
$query = "SELECT * 
            FROM contient
            ORDER BY ID_LUDOTHEQUE";

//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeJeuContenuLudo = array();
//Exécution
if($requete->execute()){
    while($donnees = $requete->fetch()){
        $jeucontenuludo = new contient(
            $donnees["ID_JEU"],
            $donnees["NOM_JEU"],
            $donnees["IMAGE_JEU"],
            $donnees["DESC_JEU"],
            $donnees["AGEMIN"],
            $donnees["AGEMAX"],
            $donnees["DUREEMIN"],
            $donnees["DUREEMAX"],
            $donnees["JOUEURMIN"],
            $donnees["JOUEURMAX"],
            $donnees["LIENAFFILIE"],
            $donnees["ID_CATEGORIE"]
        );
        $listeJeuContenuLudo[] = $jeucontenuludo;
        echo json_encode($jeucontenuludo);
    }

}else{
    echo 'Requete failed';
}
echo "<pre>";
print_r($listeJeuContenuLudo);
echo "</pre>";
