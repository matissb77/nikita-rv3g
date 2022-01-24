<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth = $pdo->prepare("SELECT  psw FROM doctor_logins WHERE doctor_id = $id");
    // $sth = $pdo->prepare("SELECT * FROM users");
    $sth->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    // echo "DB tabulas saturs:<br>";
    $result_psw = $sth->fetchAll();
    // print_r($result_psw);
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}