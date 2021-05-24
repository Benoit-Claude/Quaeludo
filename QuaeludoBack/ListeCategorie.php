<?php
    header("Access-Control-Allow-Origin: *");

    require_once 'cnx.php';
    //Appel la classe Categorie
    require_once 'Classes/class.Categorie.php';


    //Ordre SQL
    $query = "SELECT * 
                FROM categorie 
                ORDER BY ID_CATEGORIE";


    //Preparer la requete
    $requete = $pdo->prepare($query);

    //Tableau liste membres
    $listeCategorie = array();

    //Exécution
    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $categorie = new Categorie(
                $donnees["ID_CATEGORIE"],
                $donnees["NOM_CATEGORIE"],
                $donnees["DESC_CATEGORIE"],
                $donnees["IMAGE_CATEGORIE"]
            );

            $listeCategorie[] = $categorie;
        }

    }else{
        echo 'Requete failed';
    }



    echo '<pre>';
    echo print_r($listeCategorie);
    echo '</pre>';