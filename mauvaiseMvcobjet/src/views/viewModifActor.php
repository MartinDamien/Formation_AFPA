<!DOCTYPE html>
<html>
    <header>

    </header>
    <body>
        <h1>modif acteur</h1>
    <form action="<?= _URL ?>controllerEtudiant/modifEtudiant/<?= $result['id'] ?>" method="post">
        <input type="text" name="nom" placeholder="nom" value=<?= $result['nom'] ?>>
        <input type="text" name="prenom" placeholder="prenom" value=<?= $result['prenom'] ?>>
        <input type="text" name="email" placeholder="email" value=<?= $result['email'] ?>>
        <input type="text" name="password" placeholder="password" value=<?= $result['password'] ?>>
        <button type="submit" value="enregistrer">enregistrer</button>
    </form>
    </body>
</html>