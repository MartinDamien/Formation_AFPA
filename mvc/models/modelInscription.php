<?php

require_once('models/model.php');

function addCourseForStudent($studentId, $courseId)
{

    $bddPDO = connexionBDD();
    $req = $bddPDO->prepare('INSERT INTO inscription(studentId,courseId) VALUES (:studentId, :courseId)');
    $req->bindvalue(':studentId', $studentId);
    $req->bindvalue(':courseId', $courseId);
    $req->bindvalue(':inscriptionDate', date('Y-m-d'));

    $result = $req->execute();
    return $result;
}

function getOnStudentCourses($studentId)
{
    $bddPDO = connexionBDD();

    $req = "SELECT cours.id_cours, cours.code, cours.titre, cours.langage,inscription.id_student, inscription.id_cours 
                FROM courses, inscription
                WHERE inscription.id_student = '$studentId' AND inscription.id_cours = cours.id_cours";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($studentId));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function getCoursesStudent($studentId, $courseId)
{
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM inscription WHERE id_student=? AND id_cours = ? ";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($studentId, $courseId));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}
