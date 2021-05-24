<?php
    header("Access-Control-Allow-Origin: *");


    require_once 'cnx.php';

    require_once 'Classes/class.Ludotheque.php';

    //Ordre SQL
    $query = "SELECT * FROM ludotheque ORDER BY ID_LUDOTHEQUE";


    //Prepare la requete
    $requete = $pdo->prepare($query);


    //Tableau liste ludotheque
    $listeLudoteque = array();

    //Execution
    if($requete->execute()){
        while ($donnees = $requete->fetch()){
            $ludotheque = new Ludotheque(
                $donnees['ID_LUDOTHEQUE'],
                $donnees['NOM_LUDOTHEQUE'],
                $donnees["DESC_LUDOTHEQUE"],
                $donnees["IAMGE_LUDOTHEQUE"],
                $donnees['ID_JOUEUR']
            );
            $listeLudoteque[]= $ludotheque;
        }
    }else{
        echo 'Aucune ludothèque';
    }

    echo "<pre>";
    print_r($listeLudoteque);
    echo "</pre>";

