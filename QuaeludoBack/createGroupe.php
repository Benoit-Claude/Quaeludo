<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

if (isset($_POST['NOM'])
    AND isset($_POST['Desc'])
    AND isset($_POST['IDJoueur'])){

    $sql = "INSERT INTO groupe(NOM_GROUPE, DESC_GROUPE, ID_JOUEUR) 
            VALUE(?, ?, ?)";


        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['NOM']);
        $requete->bindParam(2, $_POST['Desc']);
        $requete->bindParam(3, $_POST['IDJoueur']);

        echo $requete->execute();
}
