<?php
//start session
session_start();
require('header.html');
?>
<main>
    <ul>
        <?php
        echo "<h1>" . $result['nom'] . "</h1>";
        echo "<h2>" . $result['prenom'] . "</h2><hr>";
        echo "<p>" . $result['email'] . "</p>";
        ?>
    </ul>
</main>