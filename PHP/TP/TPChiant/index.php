<?php
require "connect.php";

$file = fopen('csv/produit2.csv', 'r');
while (!feof($file)) {
    $line[] = fgetcsv($file, 1024, ";");
    
    echo "<pre>";
    print_r($line);
    echo "</pre>";

}fclose($file);


?>
</body>

</html>