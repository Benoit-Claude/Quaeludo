<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';

if (isset($_POST['id'])){
    $dateFR = new DateTime($_POST['datenaissance']);
    $dateUS = $dateFR->format('Y-m-d');

    $sql = "UPDATE joueur SET PSEUDO = ?, NOM_JOUEUR = ?, PRENOM = ?, DATENAISSANCE = ?, ADRESSEMAIL = ?, MDP = ?";
        $requete = $pdo->prepare($sql);
        $requete->bindValue(1, $_POST['Pseudo']);
        $requete->bindValue(2, $_POST['NOM']);
        $requete->bindValue(3, $_POST['Prenom']);
        $requete->bindValue(4, $dateUS);
        $requete->bindValue(5, $_POST['AdresseMail']);
        $requete->bindValue(6, $_POST['Mdp']);

        echo $requete->execute();
}
