<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Joueur.php';


if (isset($_POST['pseudo'])){
    $_GET['pseudo'] = $_POST['pseudo'];
}else{
    if (isset($_GET['pseudo'])){
        $_POST['pseudo'] = $_GET['pseudo'];
    }
}

if (isset($_GET['pseudo'])){
    $sql = "SELECT * 
            FROM joueur 
            WHERE PSEUDO = ? ";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_GET['pseudo']);
    $membre = null;
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
            $membre = new Joueur(
                $donnees["pseudo_JOUEUR"],
                $donnees["PSEUDO"],
                $donnees["NOM_JOUEUR"],
                $donnees["PRENOM"],
                $donnees["DATENAISSANCE"],
                $donnees["ADRESSEMAIL"],
                $donnees["MDP"],
                $donnees["IMAGE_JOUEUR"],
                $donnees["pseudo_CATEGORIE"]
            );
        }
    }
    echo json_encode($membre);
}else{
    echo -1;
}


