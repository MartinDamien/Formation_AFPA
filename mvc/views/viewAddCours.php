
<?php
//start session
session_start();
require('header.html');
?>
<main>
    <form action="<?= _URL ?>controllerCours/ajoutCours" method="POST">
        <input type="text" name="code" placeholder="code" id="">
        <input type="text" name="titre" placeholder="titre" id="">
        <input type="text" name="langage" placeholder="langage" id="">
        <button type="submit">envoyer</button>
    </form>
</main>