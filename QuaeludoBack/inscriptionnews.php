<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

if (isset($_POST['AdresseMail'])){

    $sql = "INSERT INTO news(ADRESSEMAIL) 
            VALUE(?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['AdresseMail']);


        echo $requete->execute();
}
