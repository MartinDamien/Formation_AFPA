<?php
require('header.html');
?>
<main>
    <?php foreach ($result as $value) {?>
    <div class="card">
    <img src="../upload/<?= $value['cover'] ?>" alt="">
    <h2><?= $value['titre'] ?></h2>
    <a href="<?= _URL ?>Film/affiche1<?= $value['id'] ?>">regarder</a>
    <a href="<?= _URL ?>Film/mofif<?= $value['id'] ?>">modifier</a>
    <a href="<?= _URL ?>Film/suprimer<?= $value['id'] ?>">ne plus recommander(suprim)</a>
    </div>
    <?php } ?>
</main>