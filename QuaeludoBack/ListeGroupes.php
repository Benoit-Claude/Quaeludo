<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

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

            $sql = "SELECT * FROM regroupe, joueur 
                    WHERE regroupe.ID_GROUPE = ?
                    AND regroupe.ID_JOUEUR = joueur.ID_JOUEUR
                    ORDER BY NOM_JOUEUR
                    ";

            $requete2 = $pdo->prepare($sql);
            $requete2->bindValue(1, $groupe->getId());

            $lesJoueurs = array();
            if ($requete2->execute()){
                while($donnees2 = $requete2->fetch()){
                    $regroupe = new Regroupe(
                        $donnees2["ID_JOUEUR"],
                        $donnees2["PSEUDO"],
                        $donnees2["NOM_JOUEUR"],
                        $donnees2["PRENOM"],
                        $donnees2["DATENAISSANCE"],
                        $donnees2["ADRESSEMAIL"],
                        $donnees2["MDP"],
                        $donnees2["IMAGE_JOUEUR"],
                        $donnees2["ID_CATEGORIE"]
                    );

                    $lesJoueurs[] = $regroupe;
                }
            }

            $groupe->setLesJoueurs($lesJoueurs);

            $listeGroupes[] = $groupe;
        }

    }
    echo json_encode($listeGroupes);
    exit();

    /*echo "<pre>";
    print_r($listeGroupes);
    echo "</pre>";*/