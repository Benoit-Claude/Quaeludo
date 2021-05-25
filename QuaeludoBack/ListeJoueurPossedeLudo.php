<?php
header("Access-Control-Allow-Origin: *");

    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'Classes/class.possede.php';


//Ordre SQL
$query = "SELECT * 
            FROM possede
            ORDER BY ID_JOUEUR";
//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeJoueurPossedeLudo = array();
//Exécution
if($requete->execute()){
    while($donnees = $requete->fetch()){
        $joueurpossedeludo = new possede(
            $donnees["ID_LUDOTHEQUE"],
            $donnees["ID_JOUEUR"]
        );
        $listeJoueurPossedeLudo[] = $joueurpossedeludo  ;
        echo json_encode($joueurpossedeludo);

    }

}else{
    echo 'Requete failed';
}
echo "<pre>";
print_r($listeJoueurPossedeLudo);
echo "</pre>";
