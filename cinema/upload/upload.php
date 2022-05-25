<?php

if (isset($_FILES['avatar'])) {
    $dossier = 'upload/'; // non du fichier ou on va copier le fichier
    var_dump('dossier :'.$dossier.'<br>');
    $fichier = basename($_FILES['avatar']['name']);
    var_dump('fichier :'.$fichier.'<br>');
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier))
    //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
    {
        echo 'Upload effectué avec succès !';
    } else {
        /*echo 'Echec de l\'upload !'; //Sinon (la fonction renvoie FALSE).*/
    }
}