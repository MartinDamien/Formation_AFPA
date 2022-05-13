<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css">
    <title>The Bottle's - Sign Up</title>
  </head>

  <body>
      <header>
          <div id="logo" href="../mainpage.html">
            <div class="bolle">
              <div class="liquide"></div>
            </div>
            <h1>The Bottle's</h1>
          </div>

          <div class="identite">
            <div class="button">
              <a href="../mainpage.html">return</a>
            </div>
          </div>
      </header>

      <main>
        <form action="inscription.php" method="post">
        <label for="mail">mail</label><br />
        <input type="text" name="mail" id="" placeholder="mail" /><br />
        
        <label for="password">password</label><br />
        <input type="password" name="password" id="" placeholder="password" /><br />
        
        <label for="nom">nom</label><br />
        <input type="text" name="nom" id="" placeholder="nom" /><br />
        
        <label for="prenom">prenom</label><br />
        <input type="text" name="prenom" id="" placeholder="prenom" /><br />
        
        <label for="role">role</label><br />
        <select name="role" id="">
          <option value=1>Admin</option>
          <option value=2>Client</option>
        </select><br />
        
        <button type="submit">OK</button>
      </form>
      </main>
      <?php
    require '../../1.connect/connect.php';

    $mail = $_POST['mail'];
    $pass = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];

try {
    //integration des données dans la BdD
    $sql = $pdo->prepare("INSERT INTO user(id,email,password,nom,prenom,ID_role) VALUE(NULL,?,?,?,?,?)");
    $sql->execute([$mail, $pass, $nom, $prenom, $role]);

    $sqlmail = $pdo->prepare("SELECT * FROM `user` WHERE `email` LIKE = ?");
    $sqlmail->execute([$mail]);
    if ($sqlmail->rowCount() == 1) {
        redirection:
        header("location:inscription.html");
    } else {
        echo "vous etes bien inscrit" . "<br>";
    }

}
catch (PDOException $e) { echo $e->getMessage() ; }
    

    ?>
  </body>
</html>
