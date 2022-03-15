<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require "room/pieces.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="house.php" method="post">
        <label for="Bath">Bath</label><br>
        <input type="number" name="M²1" id="" placeholder="M²">
        <input type="number" name="NbFenetre1" id="" placeholder="NbFenetre"><br>
        <label for="Bedroom">Bedroom</label><br>
        <input type="number" name="M²2" id="" placeholder="M²">
        <input type="number" name="NbFenetre2" id="" placeholder="NbFenetre"><br>
        <label for="Kitchen">Kitchen</label><br>
        <input type="number" name="M²3" id="" placeholder="M²">
        <input type="number" name="NbFenetre3" id="" placeholder="NbFenetre"><br>
        <button type="submit">Enregistrer</button>
        <?php

        class House
        {
            public function __construct(Bath $bath, Bedroom $bedroom, Kitchen $kitchen)
            {
                $this->bath = $bath;
                $this->bedroom = $bedroom;
                $this->kitchen = $kitchen;
            }
            public function getbath()
            {
                return $this->bath;
            }
            public function getbedroom()
            {
                return $this->bedroom;
            }
            public function getkitchen()
            {
                return $this->kitchen;
            }
        }

        $bath = new Bath($_POST["M²1"], $_POST["NbFenetre1"]);
        $bedroom = new Bedroom($_POST["M²2"], $_POST["NbFenetre2"]);
        $kitchen = new Kitchen($_POST["M²3"], $_POST["NbFenetre3"]);
        $house = new House($bath, $bedroom, $kitchen);


        echo "<pre>";
        print_r($house);
        echo "</pre>";

        echo "Nombre total M²: " . ($_POST["M²1"] + $_POST["M²2"] + $_POST["M²3"]) . "<br>";
        echo "Nombre total de fenetre: " . ($_POST["NbFenetre1"] + $_POST["NbFenetre2"] + $_POST["NbFenetre3"]) . "<br>";
        ?>
        <hr>
</body>

</html>