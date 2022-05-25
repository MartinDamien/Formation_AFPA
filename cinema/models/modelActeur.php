<?php
require_once('model.php');

function addActeur($post)
{
    if (isset($_FILES['avatar']) and $_FILES['avatar']['error'] == 0) {
        if ($_FILES['avatar']['size'] <= 1000000) {

            $dossier = 'upload/'; // non du fichier ou on va copier le fichier
            $nom = $post['nom'];
            $prenom = $post['prenom'];
            $cover = $_FILES['avatar']['name'];
            $bddPDO = connexionBDD();


            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . basename($cover))) { //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                echo 'Upload effectué avec succès !';
            } else {
                echo 'Echec de l\'upload !'; //Sinon (la fonction renvoie FALSE).
            }
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

function affiche()
{
    
}
