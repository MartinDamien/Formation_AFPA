<?php
require('header.html');
?>

<main>
    <ul>
        <?php
        foreach ($result as $value) { ?>
            <li><?= $value['code'] ?> <?= $value['titre'] ?> <?= $value['langage'] ?>
                <a href="../controllerCours/listeUnCours/<?= $value['id_cours'] ?>">afficher</a>
                <a href="../controllerCours/afficheModifCours/<?= $value['id_cours'] ?>">modifier</a>
                <a href="../controllerCours/afficheModifCours/<?= $value['id_cours'] ?>">supprimer</a>
            </li>
        <?php } ?>
    </ul>
</main>