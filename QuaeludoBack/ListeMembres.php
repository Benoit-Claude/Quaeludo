<?php
header("Access-Control-Allow-Origin: *");


//Appel la classe Joueur
    require_once 'cnx.php';
    require_once 'Classes/class.Joueur.php';


    //Ordre SQL
    $query = "SELECT * 
              FROM joueur 
              ORDER BY ID_JOUEUR";

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
                $donnees["MDP"],
                $donnees["IMAGE_JOUEUR"],
                $donnees["ID_CATEGORIE"]
            );

            $listeMembres[] = $membre;
        }

    }
    echo json_encode($listeMembres);
    exit();

/*echo '<pre>';
echo print_r($listeMembres);
echo '</pre>';*/