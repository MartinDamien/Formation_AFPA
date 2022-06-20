<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="record.php" method="post">
        <label for="Head">Head</label><br>
        <input type="text" name="yeux" id="" placeholder="Yeux">
        <input type="text" name="nez" id="" placeholder="nez">
        <input type="text" name="bouche" id="" placeholder="bouche"><br>
        <label for="tronc">tronc</label><br>
        <input type="text" name="corpulance" id="" placeholder="corpulance">
        <input type="text" name="couleur" id="" placeholder="couleur"><br>
        <label for="jambes">jambes</label><br>
        <input type="text" name="taille" id="" placeholder="taille">
        <label for="poilu">poilu ?</label>
        <select name="poilue" id="">
            <option value="oui">oui</option>
            <option value="non">non</option>
        </select><br>
        <button type="submit">Enregistrer</button>
        <?php
        require "sac/head.php";
        require "sac/body.php";
        require "sac/tronc.php";
        require "sac/jambes.php";
        
        $tete = new Head($_POST["yeux"],$_POST["nez"],$_POST["bouche"]);
        $tronc = new Tronc($_POST["corpulance"],$_POST["couleur"]);
        $jambes = new Jambes($_POST["taille"],$_POST["poilue"]);
        $corp = new Body($tete,$tronc,$jambes);
        
        
        echo "<pre>";
        print_r($corp);
        echo "</pre>";
        
        echo "couleur des yeux : ".($corp->getYeux());
        ?>
    </form>
</body>
</html>

