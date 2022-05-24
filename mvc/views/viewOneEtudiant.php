<?php
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