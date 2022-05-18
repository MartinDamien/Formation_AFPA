<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    $pdo = require "../1.connect/connect.php";
    require "../1.connect/boataout.php";

    define('USERNAME_REGEX',    '%[^a-z0-9\-\[\]\.\_=!\$\%\^&*(){}?@#$+\'"\/]+%is');
    define('EMAIL_REGEX',        '%[a-z0-9._-]+@[a-z0-9_-]+\.[a-z.]+%i');

    //Cookie defines
    define('COOKIE_TIMEOUT', (52 * 7 * 60 * 60)); //cookies set to a year by default

    //current time
    if (!defined('TIME_NOW'))
        define('TIME_NOW', time()); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label for="nom">nom :<br>
            <input type="text" name="nom" id="nom" placeholder="john"><br>
        </label>
        <label for="nom">prenom :<br>
            <input type="text" name="prenom" id="prenom" placeholder="smith"><br>
        </label>
        <label for="nom">password :<br>
            <input type="password" name="password" id="password" placeholder=""><br>
        </label>
        <input type="button" value="submit">
    </form>
    <?php

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];

    class utilisateur
    {
        private $nom;
        private $prenom;
        private $password;

        public function __construct($n, $p, $pass)
        {
            $this->nom = $n;
            $this->prenom = $p;
            $this->password = $pass;
        }
        public function debug($n, $p, $pass)
        {
            echo "<pre>";
            print_r($n, $p, $pass);
            echo "</pre>";
        }

        private function dtb()
        {
        }
    }

    function nouveau($nom, $prenom, $password)
    {
        $new = new utilisateur($nom, $prenom, $password);
    }

    ?>
</body>

</html>