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
    $sql = "SELECT * FROM groupe WHERE ID_GROUPE = ? ";
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
    }
    echo json_encode($groupe);
}else{
    echo -1;
}

echo '<script>';
echo "console.log($groupe)";
echo '</script>';