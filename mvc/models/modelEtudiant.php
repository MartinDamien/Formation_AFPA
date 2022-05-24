<?php
require_once('model.php');

function getEtudiants()
{
    $bddPDO = connexionBDD();
    $requete = "SELECT * FROM etudiants ORDER BY id ASC";
    $resultGetEtudiant = $bddPDO->query($requete);
    $data = $resultGetEtudiant->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getUnEtudiant($id)
{
    $bddPDO = connexionBDD();
    $req = "SELECT * FROM etudiants WHERE id=?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function addEtudiant($etu)
{
    $n = $etu['nom'];
    $p = $etu['prenom'];
    $e = $etu['email'];
    $pass = $etu['password'];

    $bddPDO = connexionBDD();
    $requete = "INSERT INTO etudiants (nom,prenom,email,password) VALUES(?,?,?,?)";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($n, $p, $e, $pass));

    die;
}

function updateEtudiant($id, $post)
{
    $n = $post['nom'];
    $p = $post['prenom'];
    $e = $post['email'];
    $pass = $post['password'];

    $bddPDO = connexionBDD();
    $requete = "UPDATE etudiants SET nom=?,prenom=?,email=?,password=? WHERE id =$id";
    $stmt = $bddPDO->prepare($requete);
    $stmt->execute(array($n, $p, $e, $pass));
}

function delEtudiant($id)
{
    $bddPDO = connexionBDD();
    $req = "DELETE FROM etudiants WHERE etudiants.id = ?";
    $stmt = $bddPDO->prepare($req);
    $stmt->execute(array($id));
}

function connectEtudiant($post)
{
    $bddPDO = connexionBDD(); 
    if (isset($post['loginBtn'])) {
        $mail = trim($post['email']);
        $password = trim($post['password']);
        if ($mail != "" && $password != "") {
            try {
                $requete = "SELECT * FROM etudiants WHERE mail =:mail and password=:password";
                $stmt = $bddPDO->prepare($requete);
                $stmt->bindParam('mail', $mail, PDO::PARAM_STR);
                $stmt->bindValue('password', $password, PDO::PARAM_STR);
                $stmt->execute();
                $count = $stmt->rowCount();
                $row   = $stmt->fetch(PDO::FETCH_ASSOC);
                var_dump($row);
                if ($count == 1 && !empty($row)) {
                    /******************** Your code ***********************/
                    $_SESSION['sess_user_id'] = $row['uid'];
                    $_SESSION['sess_user_name'] = $row['name'];
                    $_SESSION['sess_name'] = $row['name'];
                    $_SESSION['sess_name'] = $row['name'];
                } else {
                    echo('unvalid mail & pacewoarde!');
                }
            } catch (PDOException $e) {
                echo "Error : " . $e->getMessage();
            }
        } else {
            echo('Remplis les deux cases!');
        }
    }
}
