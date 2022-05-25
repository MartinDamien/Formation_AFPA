<?php
require('header.html');
?>
<main>
    <?php foreach ($result as $value) {?>
    <div class="card">
    <img src="../upload/<?= $value['cover'] ?>" alt="">
    <h2><?= $value['titre'] ?></h2>
    <a href="Acteur/affiche1<?= $value['id'] ?>">afficher</a>
    <a href="Acteur/mofif<?= $value['id'] ?>">modifier</a>
    <a href="Acteur/suprimer<?= $value['id'] ?>">suprimer</a>
    </div>
    <?php } ?>
</main>