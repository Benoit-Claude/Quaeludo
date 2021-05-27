<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'Classes/class.Ludotheque.php';

    //Ordre SQL
    $query = "SELECT * 
              FROM ludotheque 
              ORDER BY ID_LUDOTHEQUE";

    //Prepare la requete
    $requete = $pdo->prepare($query);

    //Tableau liste ludotheque
    $listeLudotheques = array();
    
    //Execution
    if($requete->execute()){
        while ($donnees = $requete->fetch()){
            $ludotheque = new Ludotheque(
                $donnees['ID_LUDOTHEQUE'],
                $donnees['NOM_LUDOTHEQUE'],
                $donnees["DESC_LUDOTHEQUE"],
                $donnees["IMaGE_LUDOTHEQUE"],
                $donnees['ID_JOUEUR']
            );

            $sql = "SELECT * FROM contient, jeu 
                    WHERE contient.ID_LUDOTHEQUE = ?
                    AND contient.ID_JEU = jeu.ID_JEU
                    ORDER BY NOM_JEU";

            $requete2 = $pdo->prepare($sql);
            $requete2->bindValue(1, $ludotheque->getId());

            $lesJeux = array();
            if ($requete2->execute()){
                while ($donnees2 = $requete2->fetch()){
                    $contient = new Contient(
                        $donnees2["ID_JEU"],
                        $donnees2["NOM_JEU"],
                        $donnees2["IMAGE_JEU"],
                        $donnees2["DESC_JEU"],
                        $donnees2["AGEMIN"],
                        $donnees2["AGEMAX"],
                        $donnees2["DUREEMIN"],
                        $donnees2["DUREEMAX"],
                        $donnees2["JOUEURMIN"],
                        $donnees2["JOUEURMAX"],
                        $donnees2["LIENAFFILIE"],
                        $donnees2["ID_CATEGORIE"]
                    );


                    $lesJeux[] = $contient;
                }
            }
            $ludotheque->setLesJeux($lesJeux);

            $listeLudotheques[] = $ludotheque;
        }
    }
    echo json_encode($listeLudotheques);
    exit();
   /*echo "<pre>";
    print_r($listeLudoteque);
    echo "</pre>";*/