<?php
echo "1";

    header("Access-Control-Allow-Origin: *");
echo "2";

    require_once 'cnx.php';
    require_once 'classes/class.Groupe.php';
echo "3";


echo "4";

if(isset($_POST['idgroupe'])){
    echo "5-if";

    $_GET['idgroupe'] = $_POST['idgroupe'];
    echo "5-if-get";
    }else{
    echo " 5-else ";
        if (isset($_GET['idgroupe'])){
            echo " 5-else-post";
            $_POST['idgroupe'] = $_GET('idgroupe');
        }
    }
    echo "5-fin //";

echo print_r($_POST['idgroupe']);
    if (isset($_POST['idgroupe'])){
        echo "6";
        //recheche du groupe par id
        $sql = "SELECT * FROM groupe WHERE ID_GROUPE = ?";
        echo "7";
        //prépare requete

        $requete = $pdo->prepare($sql);
        echo "8";
        //parametre : id du groupe
        $requete->bindValue(1, $_POST['idgroupe']);
        $groupe = null;
        if ($requete->execute()){
            echo "9-if-req";
            //recupérer le résultat
            if ($donnees = $requete->fetch()){
                echo "9-if-req-if";
                $groupe = new Groupe(
                    $donnees["ID_GROUPE"],
                    $donnees["NOM_GROUPE"],
                    $donnees["DESC_GROUPE"],
                    $donnees["IMAGE_GROUPE"],
                    $donnees["IDJOUEUR"]
                );
                echo "9-if-req-if-groupe";
            }
        }
        echo json_encode($groupe);
        echo "10-json";
    }else{
        echo "-1";
    }