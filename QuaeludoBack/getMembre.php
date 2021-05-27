<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Joueur.php';


if (isset($_POST['id'])){
    $_GET['id'] = $_POST['id'];
}else{
    if (isset($_GET['id'])){
        $_POST['id'] = $_GET['id'];
    }
}

if (isset($_POST['id'])){
    $sql = "SELECT * FROM joueur WHERE ID_JOUEUR = ? ";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['id']);
    $membre = null;
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
}else{
    echo -1;
}

echo '<script>';
echo "console.log($membre)";
echo '</script>';


