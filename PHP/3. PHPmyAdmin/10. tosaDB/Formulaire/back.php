<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once 'connect.php';
    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];

    //integration des données dans la BdD
    $sql = $pdo->prepare("INSERT INTO user(id,email,password,nom,prenom,role) VALUE(NULL,'$mail','$pass','$nom','$prenom','$role')");
    $sql->execute();
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
    //execute the statement
    $stmt->execute([$email]);
    //fetch result
    $user = $stmt->fetch();
    if ($user) {
        // email exists
    } else {
        // email does not exist
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Merci de votre cooperation</p>
</body>

</html>