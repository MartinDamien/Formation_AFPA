<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>modif etudiant</h1>
    <form action="../controllers/modifEtudiant/<?= $result['id_cours']?>" method="post">
        <input type="text" name="code" placeholder="code" value=<?= $result['code']?>>
        <input type="text" name="titre" placeholder="titre" value=<?= $result['titre']?>>
        <input type="text" name="langage" placeholder="langage" value=<?= $result['langage']?>>
        <button type="submit" value="enregistrer">enregistrer</button>
    </form>
    
</body>
</html>