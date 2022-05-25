<?php
require('header.html');
?>
<main>
    <?php foreach ($result as $value) {?>
    <div class="card">
    <img src="../upload/<?= $value['cover'] ?>" alt="">
    <h2><?= $value['titre'] ?></h2>
    <a href="Acteur/affiche1<?= $value['id'] ?>">regarder</a>
    <a href="Acteur/mofif<?= $value['id'] ?>">modifier</a>
    <a href="Acteur/suprimer<?= $value['id'] ?>">ne plus recommander(suprim)</a>
    </div>
    <?php } ?>
</main>