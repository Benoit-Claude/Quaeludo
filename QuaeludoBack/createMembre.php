<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

if (isset($_POST['Pseudo'])
    AND isset($_POST['NOM'])
    AND isset($_POST['Prenom'])
    AND isset($_POST['datenaissance'])
    AND isset($_POST['AdresseMail'])
    AND isset($_POST['Mdp'])
    AND isset($_POST['IDCategorie'])){
    $dateFR = new DateTime($_POST['datenaissance']);
    $dateUS = $dateFR->format('Y-m-d');

    $sql = "INSERT INTO joueur(PSEUDO, NOM_JOUEUR, PRENOM, DATENAISSANCE, ADRESSEMAIL, MDP, ID_CATEGORIE) 
            VALUE(?, ?, ?, ?, ?, ?, ?)";
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['Pseudo']);
        $requete->bindParam(2, $_POST['NOM']);
        $requete->bindParam(3, $_POST['Prenom']);
        $requete->bindParam(4, $dateUS);
        $requete->bindParam(5, $_POST['AdresseMail']);
        $requete->bindParam(6, $_POST['Mdp']);
        $requete->bindParam(7, $_POST['IDCategorie']);

        echo $requete->execute();
    echo 4;
}
