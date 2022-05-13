<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style.css" />
  <title>The Bottle's - Sign in</title>
</head>

<body>
  <header>
    <div id="logo" href="../mainpage.html">
      <div class="bolle">
        <div class="liquide"></div>
      </div>
      <h1>The Bottle's</h1>
    </div>
    <div class="button">
      <a href="../mainpage.html">return</a>
    </div>

  </header>
  <main>
    <div>
      <form action="connecter.php" method="post">
        <input type="email" name="email" id="" placeholder="Email" />
        <input type="password" name="password" id="" placeholder="Password" /><br />
        <button type="submit">Enter</button>
      </form>
    </div>
  </main>


  <?php
  require_once '../../1.connect/connect.php';
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = $pdo->prepare("SELECT * FROM user WHERE email = ? and password = ?");
  $sql->execute([$email, $password]);
  if ($sql->rowCount() >= 1) {
    redirection:
        header("location:../mainpage.html");
    echo '<div class="card"><p>Bienvenue</p></div>';

  } else {
    echo '<div class="card"><p>Interdit</p></div>';
  }

  ?>
</body>

</html>