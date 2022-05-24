<?php
require('header.html');
?>

<body>
    <ul>
        <?php
        foreach ($result as $value) { ?>
            <li><?= $value['code'] ?> <?= $value['titre'] ?> <?= $value['langage'] ?> <a href="../controllerCours/afficheModifCours/<?= $value['id_cours'] ?>">modifier</a></li>
            <!-- echo "<li>" . $result['nom'] . "-" . $result['prenom'] . "-" . $result['email'] . "</li>"; -->
        <?php } ?>
    </ul>
</body>