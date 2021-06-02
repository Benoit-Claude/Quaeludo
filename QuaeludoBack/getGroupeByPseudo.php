<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Groupe.php';


if (isset($_POST['pseudo'])){
    $_GET['pseudo'] = $_POST['pseudo'];
}else{
    if (isset($_GET['pseudo'])){
        $_POST['pseudo'] = $_GET['pseudo'];
    }
}



if (isset($_POST['pseudo'])){
    $sql = "SELECT * 
            FROM groupe, regroupe, joueur 
            WHERE groupe.ID_GROUPE = regroupe.ID_GROUPE 
            AND joueur.ID_JOUEUR = regroupe.ID_JOUEUR 
            AND joueur.PSEUDO = ?
            ORDER BY groupe.NOM_GROUPE";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['pseudo']);
    $listeGroupe = array();
    if ($requete->execute()){
        while ($donnees = $requete->fetch()){
            $groupe = new Groupe(
                $donnees['ID_GROUPE'],
                $donnees['NOM_GROUPE'],
                $donnees["DESC_GROUPE"],
                $donnees["IMAGE_GROUPE"],
                $donnees['ID_CATEGORIE']
            );

            $sql = "SELECT * 
                    FROM regroupe, joueur 
                    WHERE regroupe.ID_GROUPE = ?
                    AND regroupe.ID_JOUEUR = joueur.ID_JOUEUR
                    ORDER BY NOM_JOUEUR";

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
            $listeGroupe[]= $groupe;
        }
    }
    echo json_encode($listeGroupe);
}


/*echo '<script>';
echo "console.log($groupe)";
echo '</script>';*/