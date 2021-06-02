<?php
header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
require_once 'classes/class.Ludotheque.php';


if (isset($_POST['pseudo'])){
    $_GET['pseudo'] = $_POST['pseudo'];
}else{
    if (isset($_GET['pseudo'])){
        $_POST['pseudo'] = $_GET['pseudo'];
    }
}



if (isset($_POST['pseudo'])){
    $sql = "SELECT * 
            FROM ludotheque, possede, joueur 
            WHERE ludotheque.ID_LUDOTHEQUE = possede.ID_LUDOTHEQUE 
            AND joueur.ID_JOUEUR = possede.ID_JOUEUR 
            AND joueur.PSEUDO = ?
            ORDER BY ludotheque.NOM_LUDOTHEQUE";
    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST['pseudo']);
    $listeLudotheque = array();
    if ($requete->execute()){
        while ($donnees = $requete->fetch()){
            $ludotheque = new Ludotheque(
                $donnees['ID_LUDOTHEQUE'],
                $donnees['NOM_LUDOTHEQUE'],
                $donnees["DESC_LUDOTHEQUE"],
                $donnees["IMAGE_LUDOTHEQUE"],
                $donnees['ID_JOUEUR']
            );

            $sql = "SELECT * FROM contient, jeu 
                    WHERE contient.ID_LUDOTHEQUE = ?
                    AND contient.ID_JEU = jeu.ID_JEU
                    ORDER BY NOM_JEU";

            $requete2 = $pdo->prepare($sql);
            $requete2->bindValue(1, $ludotheque->getId());

            $lesJeux = array();
            if ($requete2->execute()){
                while ($donnees2 = $requete2->fetch()){
                    $contient = new Contient(
                        $donnees2["ID_JEU"],
                        $donnees2["NOM_JEU"],
                        $donnees2["IMAGE_JEU"],
                        $donnees2["DESC_JEU"],
                        $donnees2["AGEMIN"],
                        $donnees2["AGEMAX"],
                        $donnees2["DUREEMIN"],
                        $donnees2["DUREEMAX"],
                        $donnees2["JOUEURMIN"],
                        $donnees2["JOUEURMAX"],
                        $donnees2["LIENAFFILIE"],
                        $donnees2["ID_CATEGORIE"]
                    );


                    $lesJeux[] = $contient;
                }
            }
            $ludotheque->setLesJeux($lesJeux);


            $listeLudotheque[]= $ludotheque;
        }
    }

}
echo json_encode($listeLudotheque);
/*echo '<script>';
echo "console.log($ludotheque)";
echo '</script>';*/