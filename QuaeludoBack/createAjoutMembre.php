<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

if (isset($_POST['IDGroupe'])
    AND isset($_POST['IDMembre'])
    ){

    $sql = "INSERT INTO regroupe(ID_GROUPE,ID_JOUEUR) 
            VALUE(?, ?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['IDGroupe']);
        $requete->bindParam(2, $_POST['IDMembre']);


        echo $requete->execute();
    echo 4;
}
