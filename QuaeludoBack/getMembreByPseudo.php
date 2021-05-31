<?php
header("Access-Control-Allow-Origin: *");
require_once 'cnx.php';
require_once 'classes/class.Ludotheque.php';


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
            WHERE joueur.PSEUDO = ?";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_GET['pseudo']);
    $membre = array();
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
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
        }
    }
    echo json_encode($membre);
}

/*echo '<script>';
echo "console.log($ludotheque)";
echo '</script>';*/