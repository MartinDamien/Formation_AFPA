<?php
//start session
session_start();
require('header.html');
?>
<main>
    <ul>
        <?php
        echo "<h1>" . $result['titre'] . "</h1>";
        echo "<h2>" . $result['code'] . "</h2><hr>";
        echo "<p>" . $result['langage'] . "</p>";
        ?>
    </ul>
</main>