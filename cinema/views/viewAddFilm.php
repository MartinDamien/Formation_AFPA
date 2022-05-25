<?php
require('header.html');
?>
<main>
    <form method="POST" action="<?= _URL ?>controllerFilm/nouveauFilm" enctype="multipart/form-data">
        <input type="text" name="titre" placeholder="titre">
        <input type="file" name="avatar" placeholder="cover">
        <button type="submit">envoyer</button>
    </form>
</main>
