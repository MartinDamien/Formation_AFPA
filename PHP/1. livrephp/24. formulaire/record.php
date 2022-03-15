<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <body>
    <?php
    $fichier = fopen("utilisateur.csv", "r+");
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    
    if (isset($_POST["email"])) {
    /*
        faire une fonction qui verifie que l'email n'existe as avant d'ecrire
        faire une bucle sur le fichier "fichier.csv
        et verifier si le mail existe, s'il n'existe pas, ecrire dans le fichier le nouveau record
        1. parcourir le fichier csv
        2.pour chaque ligne verifier si $_POST["email"] est different du premier champ de cette ligne
    */
        while (($line = fgetcsv($fichier,1024,";")) != false) {
            if ($line[0] == $email) {
                echo "Email existe";
                exit;
            }
        }
    } else {
        echo "pas d'email dans le formulaire";
    }
    //$line = $_POST["email"].$_POST["nom"].$_POST["prenom"]
    //        .$_POST["telephone"].$_POST["nrue"].$_POST["nomrue"]
    //        .$_POST["codepostal"].$_POST["ville"];
    foreach ($_POST as $key =>
    $value) { fwrite($fichier, $value . ";"); } fwrite($fichier, "\n"); ?>
  </body>
</html>
