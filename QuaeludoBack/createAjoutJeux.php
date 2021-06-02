<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

if (isset($_POST['IDLudotheque'])
    AND isset($_POST['IDJeux'])
    ){

    $sql = "INSERT INTO contient(ID_LUDOTHEQUE,ID_JEU) 
            VALUE(?, ?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['IDLudotheque']);
        $requete->bindParam(2, $_POST['IDJeux']);


        echo $requete->execute();
}
