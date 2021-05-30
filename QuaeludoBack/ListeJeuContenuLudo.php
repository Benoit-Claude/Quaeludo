<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'Classes/class.contient.php';


//Ordre SQL
$query = "SELECT * FROM jeu, contient 
          WHERE contient.ID_JEU = jeu.ID_JEU 
          AND contient.ID_LUDOTHEQUE = :id 
          ORDER BY jeu.NOM_JEU";

//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeJeuContenuLudo = array();
//Exécution
if($requete->execute(
    array(
        "id"=>$_GET['id']
    ))){
    while($donnees = $requete->fetch()){
        $jeucontenuludo = new Jeu(
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
    }

}
echo json_encode($listeJeuContenuLudo);

/*echo "<pre>";
print_r($listeJeuContenuLudo);
echo "</pre>";*/