<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");


    //Appel la classe Categorie
    require_once 'cnx.php';
    require_once 'Classes/class.Categorie.php';


    //Ordre SQL
    $query = "SELECT * 
                FROM categorie 
                ORDER BY ID_CATEGORIE";


    //Preparer la requete
    $requete = $pdo->prepare($query);

    //Tableau liste membres
    $listeCategories = array();

    //Exécution
    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $categorie = new Categorie(
                $donnees["ID_CATEGORIE"],
                $donnees["NOM_CATEGORIE"],
                $donnees["DESC_CATEGORIE"],
                $donnees["IMAGE_CATEGORIE"]
            );

            $listeCategories[] = $categorie;
        }

    }
    echo json_encode($listeCategories);
    exit();

    /*echo '<pre>';
    echo print_r($listeCategories);
    echo '</pre>';*/