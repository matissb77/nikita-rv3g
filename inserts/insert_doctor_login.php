<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    $sql = "INSERT INTO doctor_logins(doctor_id, psw) VALUES (5, 'Jansons123')";

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "dakteris izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}