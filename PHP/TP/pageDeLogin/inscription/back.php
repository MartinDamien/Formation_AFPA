<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once '../connect.php';

    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];

try {
    //integration des données dans la BdD
    $sql = $pdo->prepare("INSERT INTO user(id,email,password,nom,prenom,ID_role) VALUE(NULL,?,?,?,?,?)");
    $sql->execute([$mail, $pass, $nom, $prenom, $role]);

    $sqlmail = $pdo->prepare("SELECT * FROM `user` WHERE `email` LIKE = ?");
    $sqlmail->execute([$mail]);
    if ($sqlmail->rowCount() == 1) {
        redirection:
        header("location:inscription.html");
    } else {
        echo "vous etes bien inscrit" . "<br>";
    }

}
catch (PDOException $e) { echo $e->getMessage() ; }
    

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="../mainpage.html">retour à la page principale</a>
</body>

</html>