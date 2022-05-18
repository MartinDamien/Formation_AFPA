<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "Html.php";

    $table = new Html\Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new Html\Row();
    $row->numCells = 3;

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php $table->message(); ?>
    <?php $row->message(); ?>

</body>

</html>