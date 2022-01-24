<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth = $pdo->prepare("SELECT id FROM patients WHERE email='$name'");
    // $sth = $pdo->prepare("SELECT * FROM users");
    $sth->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    // echo "DB tabulas saturs:<br>";
    $result_id = $sth->fetchAll();
    // print_r($result_id);
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}