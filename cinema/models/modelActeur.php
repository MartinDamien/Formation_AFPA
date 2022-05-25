<?php
require_once('model.php');

function addActeur($post)
{
    if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
        if ($_FILES['image']['size'] <= 1000000) {

            $dossier = 'upload/'; // non du fichier ou on va copier le fichier
            $nom = $post['nom'];
            $prenom = $post['prenom'];
            $cover = $_FILES['image']['name'];
            echo($cover);
            $bddPDO = connexionBDD();

            move_uploaded_file($_FILES['image']['tmp_name'], $dossier . basename($cover));

            $requete = "INSERT INTO acteur (nom,prenom,cover) VALUES(?,?,?)";
            $stmt = $bddPDO->prepare($requete) or exit(print_r($bddPDO->errorInfo()));
            $stmt->bindParam('nom', $nom, PDO::PARAM_STR);
            $stmt->bindValue('prenom', $prenom, PDO::PARAM_STR);
            $stmt->execute(array($nom, $prenom, $cover));

        } else {
            $erreur = "un problème de téléchargement est survenu !!";
        }
    }
    die;
}
