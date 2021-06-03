<?php
header("Access-Control-Allow-Origin: *");

//Appel la classe Joueur
require_once 'cnx.php';
require_once 'classes/class.Jeu.php';

//Ordre SQL
$query = "SELECT * 
            FROM jeu 
            ORDER BY ID_JEU";

//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste Jeu
$listejeux = array();

//Exécution
if($requete->execute()){
    while($donnees = $requete->fetch()){
        $jeu = new Jeu(
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

        $listeJeux[] = $jeu;
    }

}
echo json_encode($listeJeux);
exit();