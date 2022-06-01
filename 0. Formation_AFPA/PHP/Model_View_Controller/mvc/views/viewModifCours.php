<?php
require('header.html');
?>
<main>
    <h1>modif etudiant</h1>
    <form action="<?= _URL ?>controllers/modifEtudiant/<?= $result['id_cours']?>" method="post">
        <input type="text" name="code" placeholder="code" value=<?= $result['code']?>>
        <input type="text" name="titre" placeholder="titre" value=<?= $result['titre']?>>
        <input type="text" name="langage" placeholder="langage" value=<?= $result['langage']?>>
        <button type="submit" value="enregistrer">enregistrer</button>
    </form>

</main>