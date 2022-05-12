<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once '../connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $pdo->prepare("SELECT * FROM user WHERE email = ? and password = ?");
    $sql->execute([$email, $password]);
    if ($sql->rowCount() >= 1) {
        echo "bienvenue";
    } else {
        echo "interdit";
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>