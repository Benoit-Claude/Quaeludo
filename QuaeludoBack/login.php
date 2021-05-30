<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'path.php';
require_once('Classes/class.Joueur.php');

if(isset($_GET['pseudo']) & isset($_GET['password'])){
    $sql = "SELECT * FROM joueur WHERE PSEUDO = ? AND MDP = ?";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_GET['pseudo']);
    $requete->bindValue(2, $_GET['password']);
    $requete->execute();
    $joueur= $requete->fetch();


     if(!empty($joueur)){
         $_SESSION['pseudo'] = $_GET['pseudo'];
             $membre = new Joueur(
                 $joueur["ID_JOUEUR"],
                 $joueur["PSEUDO"],
                 $joueur["NOM_JOUEUR"],
                 $joueur["PRENOM"],
                 $joueur["DATENAISSANCE"],
                 $joueur["ADRESSEMAIL"],
                 $joueur["MDP"],
                 $joueur["IMAGE_JOUEUR"],
                 $joueur["ID_CATEGORIE"]
             );
         echo json_encode($membre) ;
     }else{
         die();
     }
}else{
    die();
}
