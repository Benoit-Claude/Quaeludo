<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Groupe.php';


if (isset($_POST['id'])){
    $_GET['id'] = $_POST['id'];
}else{
    if (isset($_GET['id'])){
        $_POST['id'] = $_GET['id'];
    }
}



if (isset($_POST['id'])){
    $sql = "SELECT * 
            FROM groupe 
            WHERE ID_GROUPE = ? ";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['id']);
    $groupe = null;
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
            $groupe = new Groupe (
                $donnees['ID_GROUPE'],
                $donnees['NOM_GROUPE'],
                $donnees['DESC_GROUPE'],
                $donnees["IMAGE_GROUPE"],
                $donnees["ID_JOUEUR"]
            );
        }

        $sql = "SELECT * FROM regroupe, joueur 
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
    }
}

echo json_encode($groupe);

/*echo '<script>';
echo "console.log($groupe)";
echo '</script>';*/