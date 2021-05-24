<?php
    header("Access-Control-Allow-Origin: *");

    require_once 'classes/class.Groupe.php';

    //Création objet PDO
    $pdo = new PDO(
        'mysql:host=localhost;port=3306;dbname=quaeludo;charset=utf8',
        'root',
        'root'
    );

    if (isset($_POST['id'])){
        $_GET['id'] = $_POST['id'];
    }else{
        if (isset($_GET['id'])){
            $_POST['id'] = $_GET['id'];
        }
    }

    if (isset($_POST['id'])){
        $sql = "SELECT * FROM groupe WHERE ID_GROUPE = ? ";
        $requete = $pdo->prepare($sql);
        $requete->bindValue(1, $_POST['id']);
        $groupe = null;
        if ($requete->execute()){
            if ($donnees = $requete->fetch()){
                $groupe = new Groupe (
                  $donnees['IDGroupe'],
                  $donnees['Nom'],
                  $donnees['Description']
                );
            }
        }
        echo json_encode($groupe);
    }else{
        echo -1;
    }

    echo '<script>';
    echo "console.log($groupe)";
    echo '</script>';