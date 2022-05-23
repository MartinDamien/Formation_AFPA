<?php

require_once('models/model.php');

function addCourseForStudent($studentId, $courseId)
{

    $bddPDO = connexionBDD();
    $req = $bddPDO->prepare('INSERT INTO inscriptions(studentId,courseId) VALUES (:studentId, :courseId)');
    $req->bindvalue(':studentId', $studentId);
    $req->bindvalue(':courseId', $courseId);
    $req->bindvalue(':inscriptionDate', date('Y-m-d'));

    $result = $req->execute();
    return $result;
}

function getOnStudentCourses($studentId)
{
    $bddPDO = connexionBDD();

    $req = "SELECT cours.id_cours, cours.code, cours.titre, cours.langage,inscriptions.id_student, inscriptions.id_cours 
                FROM courses, inscriptions
                WHERE inscriptions.id_student = '$studentId' AND inscriptions.id_cours = cours.id_cours";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($studentId));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function getCoursesStudent($studentId, $courseId)
{
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM inscriptions WHERE id_student='$studentId' AND id_cours = '$courseId' ";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($studentId));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
