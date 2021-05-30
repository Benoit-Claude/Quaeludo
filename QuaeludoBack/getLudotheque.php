<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';
require_once 'classes/class.Ludotheque.php';


if (isset($_POST['id'])){
    $_GET['id'] = $_POST['id'];
}else{
    if (isset($_GET['id'])){
        $_POST['id'] = $_GET['id'];
    }
}



if (isset($_POST['id'])){
    $sql = "SELECT * 
            FROM ludotheque 
            WHERE ID_LUDOTHEQUE = ? ";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['id']);
    $ludotheque = null;
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
            $ludotheque = new Ludotheque (
                $donnees['ID_LUDOTHEQUE '],
                $donnees['NOM_LUDOTHEQUE'],
                $donnees['IMAGE_LUDOTHEQUE'],
                $donnees["DESC_LUDOTHEQUE"],
                $donnees["ID_CATEGORIE"]
            );
        }
    }

}
echo json_encode($ludotheque);
/*echo '<script>';
echo "console.log($ludotheque)";
echo '</script>';*/