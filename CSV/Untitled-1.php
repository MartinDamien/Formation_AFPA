<?php

try {
    // connection information
    $pdo = new PDO('mysql:host=localhost;dbname=some_dbname;charset=utf8','some_user_name','some_password');
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // begin a transaction

    $pdo->beginTransaction();

    // Assume the user input value have been sanitazed and validated.

    $first_name = 'Josh';
    $last_name = 'Otwell';

    // prepare insert statement
    $insert_sql = "INSERT INTO user_detail($first_name, $last_name)
    VALUES(:first_name :last_name)";
    $insert_stmt = $pdo->prepare($insert_sql);
    $insert_stmt->bindValue(':first_name', $first_name);
    $insert_stmt->bindValue(':last_name', $last_name);

    stmt->execute();
        $last_insert_id = $pdo->lastInsertId();
        echo 'Last Insert ID: '.$last_insert_id;
        
        $pdo->commit();

} catch (PDOException $e){
$pdo->rollBack();
echo 'Datbase Error '.$e->getMessage();
}