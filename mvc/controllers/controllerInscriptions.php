<?php
// session_start();

function addCourseToStudent($studentId,$courseId){

    $nb_course = $result->rowcount();

    if($nb_course!=0){
        $message = "vous étes deja inscris a ce cours ";
        getAllCoursesStudent();
    }else{
        $result = addCourseForStudent($studentId, $courseId);

        if(!$result){
            $message = "le cours choisie n'a pas ete attribué";
            getAllCoursesStudent();
        }
    }
}