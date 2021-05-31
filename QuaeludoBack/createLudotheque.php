<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

if (isset($_POST['NOM'])
    AND isset($_POST['Desc'])
    AND isset($_POST['IDCategorie'])){

    $sql = "INSERT INTO ludotheque(NOM_LUDOTHEQUE, DESC_LUDOTHEQUE, ID_CATEGORIE) 
            VALUE(?, ?, ?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['NOM']);
        $requete->bindParam(2, $_POST['Desc']);
        $requete->bindParam(3, $_POST['IDCategorie']);

        echo $requete->execute();
}
