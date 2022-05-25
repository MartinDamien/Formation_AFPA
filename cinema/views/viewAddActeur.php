<?php
require('header.html');
?>
<main>
    <form method="POST" action="<?= _URL ?>upload/upload.php" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="nom" id="">
        <input type="text" name="Prenom" placeholder="prenom" id="">
        <input type="file" name="avatar" placeholder="cover" id="">
        <button type="submit">envoyer</button>
    </form>
</main>
