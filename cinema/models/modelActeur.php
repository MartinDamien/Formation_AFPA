<php
require_once('model.php');

function ditBonj(){
    echo('Bonjour');
}

function addActeur(){
    $n = $etu['nom'];
    $p = $etu['prenom'];
    $e = $etu['email'];
    $pass = $etu['password'];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO etudiants (nom,prenom,email,password) VALUES(?,?,?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($n, $p, $e, $pass));

    die;
}
    

?>