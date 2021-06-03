<?php
header("Access-Control-Allow-Origin: *");


    //Appel la classe Groupe
    require_once 'cnx.php';
    require_once 'classes/class.classe.php';


//Ordre SQL
$query = "SELECT * 
            FROM classe
            ORDER BY ID_CATEGORIE";
//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeCategorieClasseJeu = array();
//Exécution
if($requete->execute()){
    while($donnees = $requete->fetch()){
        $categorieclassejeu = new classe(
            $donnees["ID_JEU"],
            $donnees["ID_CATEGORIE"],
            $donnees["DESC_CATEGORIE"],
            $donnees["IMAGE_CATEGORIE"]
        );
        $listeCategorieClasseJeu[] = $categorieclassejeu  ;
        echo json_encode($categorieclassejeu);

    }

}else{
    echo 'Requete failed';
}
echo "<pre>";
print_r($listeCategorieClasseJeu);
echo "</pre>";
