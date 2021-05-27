<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Jeu.php';


if (isset($_POST['id'])){
    $_GET['id'] = $_POST['id'];
}else{
    if (isset($_GET['id'])){
        $_POST['id'] = $_GET['id'];
    }
}



if (isset($_POST['id'])){
    $sql = "SELECT * FROM jeu WHERE ID_JEU = ? ";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['id']);
    $jeu = null;
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
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
        }
    }
    echo json_encode($jeu);
}else{
    echo -1;
}

echo '<script>';
echo "console.log($jeu)";
echo '</script>';

