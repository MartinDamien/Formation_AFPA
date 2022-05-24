<?php
session_start();
if(isset($_SESSION['sess_user_id']) && $_SESSION['sess_user_id'] != "") {
  echo '<h1>Bienvenue '.$_SESSION['sess_name'].'</h1>';
  echo '<h4><a href="logout.php">Logout</a></h4>';
} else { 
  header('location:index.php');
}
require('header.html');
?>
<main>
    <form action="<?= _URL ?>controllerEtudiant/afficheconnexion" method="post">
        <input type="text" name="email" placeholder="email" id="">
        <input type="text" name="password" placeholder="password" id="">
        <input type="button" name="loginBtn" value="se Connecter">
    </form>
</main>