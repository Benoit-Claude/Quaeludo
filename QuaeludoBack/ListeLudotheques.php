<?php
header("Access-Control-Allow-Origin: *");

echo "1";
//Appel la classe Ludotheque
require_once 'Classes/class.Ludotheque.php';
echo "2";

//Création objet PDO
$pdo = new PDO(
    'mysql:host=localhost;port=8888;dbname=QuaeLudo;charset=utf8',
    'root',
    'root'
);
echo "3";

//Ordre SQL
$query = "SELECT * FROM ludotheque ORDER BY ID_LUDOTHEQUE";
echo "4";

//Prepare la requete
$requete = $pdo->prepare($query);
echo "5";

//Tableau liste ludotheque
$listeLudoteque = array();

//Execution
if($requete->execute()){
    while ($donnees = $requete->fetch()){
        $ludotheque = new Ludotheque(
            $donnees['IDLudotheque'],
            $donnees['NOM'],
            $donnees['IDJoueur']
        );
        $listeLudoteque[]= $ludotheque;
    }
}else{
    echo 'Aucune ludothèque';
}
/*
echo "<pre>";
print_r($listeLudoteque);
echo "</pre>";
/*
