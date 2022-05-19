<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        foreach ($result as $result) {?>
        <li><?= $value['nom']?></li><!-- echo "<li>" . $result['nom'] . "-" . $result['prenom'] . "-" . $result['email'] . "</li>"; -->
        <?php } ?>
    </ul>
</body>

</html>