<?php
require('header.html');
?>

<body>
    <form action="../controllerCours/ajoutCours" method="POST">
        <input type="text" name="code" placeholder="code" id="">
        <input type="text" name="titre" placeholder="titre" id="">
        <input type="text" name="langage" placeholder="langage" id="">
        <button type="submit">envoyer</button>
    </form>
</body>