<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'Classes/class.regroupe.php';


//Ordre SQL
$query = "SELECT * FROM joueur, regroupe 
          WHERE regroupe.ID_JOUEUR = joueur.ID_JOUEUR 
          AND regroupe.ID_GROUPE = :id 
          ORDER BY joueur.NOM_JOUEUR";

//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeGroupeRegroupeJoueur = array();
//Exécution
if($requete->execute(array(
    "id"=>$_GET['id']
))){
    while($donnees = $requete->fetch()){
        $grouperegroupejoueur = new Joueur(
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
        $listeGroupeRegroupeJoueur[] = $grouperegroupejoueur;

    }

}
echo json_encode($listeGroupeRegroupeJoueur);

/*echo "<pre>";
print_r($listeGroupeRegroupeJoueur);
echo "</pre>";*/
