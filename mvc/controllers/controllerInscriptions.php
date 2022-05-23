<?php
// session_start();

function addCourseToStudent($studentId, $courseId)
{

    $nb_course = $result->rowcount();

    if ($nb_course != 0) {
        $message = "vous étes deja inscris a ce cours ";
        // getAllCoursStudent();
    } else {
        $result = addCourseForStudent($studentId, $courseId);

        if (!$result) {
            $message = "le cours choisie n'a pas ete attribué";
            // getAllCoursStudent();
        } else {
            $message = "vous etes bien inscris à ce cours";
            getAllMyCours();
        }
    }
    require('views/errors.php');
    // }else{
    //     $message = "vous ,n'êtes pas connecter pour s'incrire à ce cours";
}

function getAllMyCours($studentId)
{
    // getMyCours est à créer dans modelInscriptions
    $resultGetCours = getMyCours($studentId);

    if (!$resultGetCours) {
        $message = "La récuperation des cours a rencontré un problème";
    } else {
        $nb_cours = $resultGetCours->rowCount();
        if ($nb_cours == 0) {
            $message = "Vous n'êtes inscris à aucun cours!";
            getAllCoursStudents();
        } else {
            require_once('views/viewCoursForStudent.php');
        }
    }
}
