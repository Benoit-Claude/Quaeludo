<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Categorie.php';


if (isset($_POST['id'])){
    $_GET['id'] = $_POST['id'];
}else{
    if (isset($_GET['id'])){
        $_POST['id'] = $_GET['id'];
    }
}

if (isset($_POST['id'])){
    $sql = "SELECT * FROM categorie WHERE ID_CATEGORIE = ? ";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['id']);
    $categorie = null;
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
            $categorie = new Categorie (
                $donnees['ID_CATEGORIE'],
                $donnees['NOM_CATEGORIE'],
                $donnees['DESC_CATEGORIE'],
                $donnees["IMAGE_CATEGORIE"]
            );
        }
    }
    echo json_encode($categorie);
}else{
    echo -1;
}

/*echo '<script>';
echo "console.log($categorie)";
echo '</script>';*/