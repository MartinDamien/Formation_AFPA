<?php
require "../outils.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>page php</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            border:1px  solid;
            border-color: grey;
        }
    </style>
</head>
<body>
<?php
function debugtab($t) {
    
    foreach($t as $m) {
        echo"<tr>";
        foreach($m as $m){
        echo"<td>";
        echo $m;
        echo"</td>";
        }
        echo"</tr>";
    }  
}

$mois = [
    [1,"Janvier",2,"Fevrier",3,"Mars"],
    [4,"Avril",5,"Mai",6,"Juin"],
    [7,"Juillet",8,"Aout",9,"Septembre"],
    [10,"Octobre",11,"Novembre",12,"Décembre"]
];
?>

<table>
    <th> mois </th>
    <?php
    debugtab($mois);
    ?>
</table>
</body>
</html>