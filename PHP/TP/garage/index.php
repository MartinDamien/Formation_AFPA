<!DOCTYPE html> <?php require_once '../connect.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        <?php
        $compter = $pdo->prepare("SELECT COUNT(*) FROM voiture; ");
        $compter->execute();
        echo $compter
        ?>
    </script>
</body>
</html>