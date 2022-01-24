<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth = $pdo->prepare("DELETE FROM patients WHERE id=1");
    $sth1 = $pdo->prepare("DELETE FROM patient_logins WHERE patient_id=1");
    $sth->execute();
    $sth1->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    echo "Ieraksts dzēsts!<br>";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}