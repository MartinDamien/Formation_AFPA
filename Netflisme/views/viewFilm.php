<?php
require('header.html');
?>
<main>
    <ul>
        <?php
        foreach ($result as $value) { ?>
            <li><?= $value['titre'] ?> <?= $value['cover'] ?>
                <!-- <a href="../controllerEtudiant/listeUnEtudiant/<?= $value['id'] ?>">afficher</a>
                <a href="../controllerEtudiant/afficheModifEtudiant/<?= $value['id'] ?>">modifier</a>
                <a href="../controllerEtudiant/suprimeEtudiant/<?= $value['id'] ?>">suprimer</a> -->
            </li>
        <?php } ?>
    </ul>
</main>