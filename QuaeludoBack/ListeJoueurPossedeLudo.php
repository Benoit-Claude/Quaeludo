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
if($requete->execute(
    array("id"=>$_GET['id']
))){
    while($donnees = $requete->fetch()){
        $joueurpossedeludo = new Possede(
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

        $listeJoueurPossedeLudo[] = $joueurpossedeludo;
    }

}
echo json_encode($listeJoueurPossedeLudo);
/*echo "<pre>";
print_r($listeJoueurPossedeLudo);
echo "</pre>";*/
