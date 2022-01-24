<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    $sth = $pdo->prepare("SELECT * FROM `patients` WHERE id = $id");
    $sth->execute();

    $result = $sth->fetchAll();
    // print_r($result);
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}