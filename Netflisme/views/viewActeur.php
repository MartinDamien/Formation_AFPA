<?php
require('header.html');
?>
<main>

    <?php foreach ($result as $value) { ?>
        <?= $value['nom'] ?> <?= $value['prenom'] ?>
        <!-- <a href="../controllerEtudiant/listeUnEtudiant/<?= $value['id'] ?>">afficher</a>
                <a href="../controllerEtudiant/afficheModifEtudiant/<?= $value['id'] ?>">modifier</a>
                <a href="../controllerEtudiant/suprimeEtudiant/<?= $value['id'] ?>">suprimer</a> -->

    <?php } ?>

</main>