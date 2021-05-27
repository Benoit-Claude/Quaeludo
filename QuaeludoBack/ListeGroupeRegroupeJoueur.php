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
            $donnees["ID_JOUEUR"],
            $donnees["PSEUDO"],
            $donnees["NOM_JOUEUR"],
            $donnees["PRENOM"],
            $donnees["DATENAISSANCE"],
            $donnees["ADRESSEMAIL"],
            $donnees["MDP"],
            $donnees["IMAGE_JOUEUR"],
            $donnees["ID_CATEGORIE"]
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
