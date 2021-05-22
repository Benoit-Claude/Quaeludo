<?php
    //Appel la classe Groupe
    require_once 'Classes/class.Groupe.php';

    //Création objet PDO
    $pdo = new PDO(
        'mysql:host=localhost;port=8888;dbname=QuaeLudo;charset=utf8',
        'root',
        'root'
    );


//Ordre SQL
$query = "SELECT * 
            FROM GROUPE
            ORDER BY IDGroupe";

//Preparer la requete
$requete = $pdo->prepare($query);

//Tableau liste membres
$listeGroupes = array();
//Exécution
if($requete->execute()){
    while($donnees = $requete->fetch()){
        $groupe = new Groupe(
            $donnees["IDGroupe"],
            $donnees["Nom"],
            $donnees["Description"]
        );
        $listeGroupes[] = $groupe;
    }

}else{
    echo 'Requete failed';
}
/*echo "<pre>";
print_r($listeGroupes);
echo "</pre>";*/