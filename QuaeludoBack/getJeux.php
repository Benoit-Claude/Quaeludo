<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';
require_once 'classes/class.Jeu.php';
/*require_once 'classes/class.Ludotheque.php';
require_once 'classes/class.Joueur.php';
require_once 'classes/class.Categorie.php';
require_once 'classes/class.Groupe.php';
require_once 'classes/class.possede.php';*/


if (isset($_POST['id'])){
    $_GET['id'] = $_POST['id'];
}else{
    if (isset($_GET['id'])){
        $_POST['id'] = $_GET['id'];
    }
}



if (isset($_POST['id'])){
    $sql = "SELECT groupe.ID_GROUPE = ? 
            FROM jeu, contient, joueur, ludotheque, groupe, possede
            WHERE groupe.ID_GROUPE = ?
            AND jeu.ID_CATEGORIE = ?
            AND jeu.DUREEMAX <= ?
            AND jeu.ID_JEU = contient.ID_JEU
            AND jeu.JOUEURMIN <= regroupe.length
            AND jeu.JOUEURMAX >= regroupe.length";










    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['id']);
    $jeu = null;
    if ($requete->execute()){
        if ($donnees = $requete->fetch()){
            $jeu = new Jeu(
                $donnees["ID_JEU"],
                $donnees["NOM_JEU"],
                $donnees["IMAGE_JEU"],
                $donnees["DESC_JEU"],
                $donnees["AGEMIN"],
                $donnees["AGEMAX"],
                $donnees["DUREEMIN"],
                $donnees["DUREEMAX"],
                $donnees["JOUEURMIN"],
                $donnees["JOUEURMAX"],
                $donnees["LIENAFFILIE"],
                $donnees["ID_CATEGORIE"]
            );
        }
    }

}
echo json_encode($jeu);



/*echo '<script>';
echo "console.log($jeu)";
echo '</script>';*/

