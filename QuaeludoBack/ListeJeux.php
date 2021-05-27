<?php
header("Access-Control-Allow-Origin: *");

echo "1";
//Appel la classe Joueur
require_once 'Classes/class.Jeu.php';
echo "2";

//Création objet PDO
$pdo = new PDO(
    'mysql:host=localhost;port=8888;dbname=quaeludo;charset=utf8',
    'root',
    'root'
);

echo "3";

//Ordre SQL
$query = "SELECT * 
            FROM jeu 
            ORDER BY ID_JEU";
echo "4";

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

}else{
    echo 'Requete failed';
}





echo '<pre>';
echo print_r($listeJeux);
echo '</pre>';