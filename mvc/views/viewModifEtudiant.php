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
    <form action="../controllers/modifEtudiant./<?= $result = $value['id']?>" method="post">
        <input type="text" name="nom" placeholder="nom" value>
        <input type="text" name="prenom" placeholder="prenom" value>
        <input type="text" name="email" placeholder="email" value>
        <input type="text" name="password" placeholder="password" value>
        <button type="submit">modif</button>
    </form>
    
</body>
</html>