<?php
echo "1";
    //Appel la classe Joueur
    require_once 'Classes/class.Joueur.php';
    echo "2";

    //Création objet PDO
$pdo = new PDO(
    'mysql:host=localhost;dbname=quaeludo;charset=utf8',
    'root',
    'root'
);

echo "3";

//Ordre SQL
$query = "SELECT * 
            FROM JOUEUR 

            ORDER BY IDJoueur";
echo "4";

    //Preparer la requete
    $requete = $pdo->prepare($query);

    //Tableau liste membres
    $listeMembres = array();

    //Exécution
    if($requete->execute()){
        while($donnees = $requete->fetch()){
            $membre = new Joueur(
                $donnees["IDJoueur"],
                $donnees["Pseudo"],
                $donnees["NOM"],
                $donnees["Prenom"],
                $donnees["DateNaissance"],
                $donnees["AdresseMail"],
                $donnees["Mdp"]
            );

            $listeMembres[] = $membre;
        }

    }else{
        echo 'Requete failed';
    }


// Calcule l'âge à partir d'une date de naissance jj/mm/aaaa
function Age($date_naissance){
    $am = explode('/', $date_naissance);
    $an = explode('/', date('d/m/Y'));
    if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) return $an[2] - $am[2];
    return $an[2] - $am[2] - 1;
}

echo "<pre>";
print_r(Age($date_naissance));
echo "</pre>";