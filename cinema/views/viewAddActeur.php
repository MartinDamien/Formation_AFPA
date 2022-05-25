<?php
require('header.html');
?>
<main>
    <form method="POST" action="<?= _URL ?>Acteur/nouvelleActeur" enctype="multipart/form-data">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="file" name="avatar" placeholder="cover">
        <button type="submit">envoyer</button>
    </form>
</main>
<?php if (isset($erreur)) { echo $erreur;} ?>