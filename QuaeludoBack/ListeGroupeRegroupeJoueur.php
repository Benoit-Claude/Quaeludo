<?php
header("Access-Control-Allow-Origin: *");

    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'Classes/class.regroupe.php';


//Ordre SQL
$query = "SELECT * 
            FROM regroupe
            ORDER BY ID_GROUPE";
//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeGroupeRegroupeJoueur = array();
//Exécution
if($requete->execute()){
    while($donnees = $requete->fetch()){
        $grouperegroupejoueur = new regroupe(
            $donnees["ID_GROUPE"],
            $donnees["ID_JOUEUR"]
        );
        $listeGroupeRegroupeJoueur[] = $grouperegroupejoueur  ;
        echo json_encode($grouperegroupejoueur);

    }

}else{
    echo 'Requete failed';
}
echo "<pre>";
print_r($listeGroupeRegroupeJoueur);
echo "</pre>";
