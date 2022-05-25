. développer un formulaire de connection (email/password)
    controlleur de connection:
    s'inscrire:
        . fonction affichage formulaire (email/password) 
        . appelle une fonction de de création user dans models/modelConnection.php 
    connection
        . fonction affichage formulaire (email/password)
        . appelle une fonction de connection et vérification dans models/modelConnection.php 

. cryptage du mot de passe et écriture en BDD
. profil de l'étudiant dans une session pour pouvoir accéder aux infos etudiant. 
. une fois connecté l'id de l'étudiant est dans la SESSION. 

. faire header.html 

<ul class="dropdown-menu">
        <li class="nav-item"><a class="nav-link" href="controllerStudents/connexion">Connexion</a></li>
        <li class="nav-item"><a class="nav-link" href="controllerStudents/disconnect">Deconnexion</a></li>
        <li class="nav-item"><a class="nav-link" href="controllerStudents/afficheAddCourseToStudent">Ajout d'un cours pour moi</a></li>
        <li class="nav-item"><a class="nav-link" href="controllerStudents/supptCoursEtudiant">Suppression d'un cours pour moi<a></li>
</ul>