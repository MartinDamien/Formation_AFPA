<?php
require_once('model.php');

function addActeur($post)
{
    if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
        if ($_FILES['image']['size'] <= 1000000) {
            
            $nom = $post['nom'];
            $prenom = $post['prenom'];
            $cover = $_FILES['image']['name'];
            $bddPDO = connexionBDD();
            $fichier = pathinfo($cover);

            move_uploaded_file($_FILES['image']['tmp_name'], '../img/produits/' . basename($_FILES['image']['name']));
            $requete = $bddPDO->prepare('INSERT INTO products(image) VALUES (?)') or exit(print_r($bddPDO->errorInfo()));


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
