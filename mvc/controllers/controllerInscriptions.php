<?php
// session_start();

function addCourseToStudent($studentId, $courseId)
{

    $nb_course = $result->rowcount();

    if ($nb_course != 0) {
        $message = "vous étes deja inscris a ce cours ";
        // getAllCoursesStudent();
    } else {
        $result = addCourseForStudent($studentId, $courseId);

        if (!$result) {
            $message = "le cours choisie n'a pas ete attribué";
            // getAllCoursesStudent();
        } else {
            $message = "vous etes bien inscris à ce cours";
            getAllMyCourses();
        }
    }
    require('views/errors.php');
    // }else{
    //     $message = "vous ,n'êtes pas connecter pour s'incrire à ce cours";
}

function getAllMyCourses($studentId)
{
    // getMyCourses est à créer dans modelInscriptions
    $resultGetCourses = getMyCourses($studentId);

    if (!$resultGetCourses) {
        $message = "La récuperation des cours a rencontré un problème";
    } else {
        $nb_courses = $resultGetCourses->rowCount();
        if ($nb_courses == 0) {
            $message = "Vous n'êtes inscris à aucun cours!";
            getAllCoursesStudents();
        } else {
            require_once('views/viewCoursesForStudent.php');
        }
    }
}
