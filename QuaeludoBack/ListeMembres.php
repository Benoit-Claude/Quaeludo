<?php
header("Access-Control-Allow-Origin: *");

echo "1";
    //Appel la classe Joueur
    require_once 'Classes/class.Joueur.php';
    echo "2";

    //Création objet PDO
$pdo = new PDO(
    'mysql:host=localhost;dbname=quaeludo;charset=utf8',
    'root',
    'root'
);

echo "3";

//Ordre SQL
$query = "SELECT * 
            FROM joueur 

            ORDER BY ID_JOUEUR";
echo "4";

    //Preparer la requete
    $requete = $pdo->prepare($query);

    //Tableau liste membres
    $listeMembres = array();

    //Exécution
    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $membre = new Joueur(
                $donnees["ID_JOUEUR"],
                $donnees["PSEUDO"],
                $donnees["NOM_JOUEUR"],
                $donnees["PRENOM"],
                $donnees["DATENAISSANCE"],
                $donnees["ADRESSEMAIL"],
                $donnees["MDP"]
            );

            $listeMembres[] = $membre;
        }

    }else{
        echo 'Requete failed';
    }
