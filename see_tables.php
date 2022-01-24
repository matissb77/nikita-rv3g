<?php
include 'db_connection.php'; //Iekļaujam savienojuma failu

try {
    $data = $pdo->prepare("DESCRIBE doctors");
    $data->execute();
    $kolonnas = $data->fetchAll(PDO::FETCH_COLUMN);
    foreach ($kolonnas as $nos) {
        print_r($nos);
        echo "<br>";
    }
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}