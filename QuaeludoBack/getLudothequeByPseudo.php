<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';
require_once 'classes/class.Ludotheque.php';


if (isset($_POST['pseudo'])){
    $_GET['pseudo'] = $_POST['pseudo'];
}else{
    if (isset($_GET['pseudo'])){
        $_POST['pseudo'] = $_GET['pseudo'];
    }
}



if (isset($_POST['pseudo'])){
    $sql = "SELECT * 
            FROM ludotheque, possede, joueur 
            WHERE ludotheque.ID_LUDOTHEQUE = possede.ID_LUDOTHEQUE 
            AND joueur.ID_JOUEUR = possede.ID_JOUEUR 
            AND joueur.PSEUDO = ?";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['pseudo']);
    $listeLudotheque = array();
    if ($requete->execute()){
        while ($donnees = $requete->fetch()){
            $ludotheque = new Ludotheque(
                $donnees['ID_LUDOTHEQUE'],
                $donnees['NOM_LUDOTHEQUE'],
                $donnees["DESC_LUDOTHEQUE"],
                $donnees["IMaGE_LUDOTHEQUE"],
                $donnees['ID_JOUEUR']
            );
            $listeLudotheque[]= $ludotheque;
        }
    }

}
echo json_encode($listeLudotheque);
/*echo '<script>';
echo "console.log($ludotheque)";
echo '</script>';*/