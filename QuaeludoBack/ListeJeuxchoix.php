<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

//Appel la classe Joueur
require_once 'cnx.php';
require_once 'classes/class.Jeu.php';

    //Ordre SQL
    $query = "  SELECT MAX(joueur.DATENAISSANCE) as jeune
                FROM joueur, regroupe 
                WHERE regroupe.ID_GROUPE = ? 
                AND regroupe.ID_JOUEUR=joueur.ID_JOUEUR";
    $requete = $pdo->prepare($query);
    $requete->bindParam(1, $_POST['Groupe']);
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
            $datenaissance = $donnees['jeune'];
        }


        function age($datenaissance) {
            $age = date('Y') - $datenaissance;
            if (date('md') < date('md', strtotime($datenaissance))) {
                return $age - 1;
            }
            return $age;
        }

        $agemin = age($datenaissance);
    }

    $query2 = " SELECT count(*) as nbrjoueur
                FROM regroupe, joueur
                WHERE ID_GROUPE = ?
                AND regroupe.ID_JOUEUR = joueur.ID_JOUEUR";
    $requete = $pdo->prepare($query2);
    $requete->bindParam(1, $_POST['Groupe']);
    if ($requete->execute()) {
        if ($donnees = $requete->fetch()) {
            $nombreJoueurs = $donnees['nbrjoueur'];
        }


        $query3 = "SELECT * 
               FROM jeu
               WHERE DUREEMAX <= ?
               AND AGEMIN <= ?
               AND JOUEURMIN <= ?
               AND JOUEURMAX >= ?
               AND ID_CATEGORIE = ?";

        $requete = $pdo->prepare($query3);
        $requete->bindParam(1, $_POST['TempsMax']);
        $requete->bindParam(2, $agemin);
        $requete->bindParam(3, $nombreJoueurs);
        $requete->bindParam(4, $nombreJoueurs);
        $requete->bindParam(5, $_POST['Categorie']);
        $listeJeux = array();

        if ($requete->execute()) {
            $test = $_POST['Categorie'];
            while ($donnees = $requete->fetch()) {
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
    }
