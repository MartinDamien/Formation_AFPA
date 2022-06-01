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
            $fichier = pathinfo($_FILES['avatar']['name']);
            $extension_upload = $fichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG');
            if (in_array($extension_upload, $extensions_autorisees)) {
                move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . basename($cover));
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

function afficheActeur()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM acteur ORDER BY id ASC";
    $resultActeur = $bddPDO->query($requete);
    $data = $resultActeur->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function suprim($id)
{
    $bddPDO = connexionBDD();
    $requete = "DELETE FROM acteur WHERE acteur.id = ?";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($id));
}