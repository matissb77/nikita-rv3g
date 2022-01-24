<?php
require_once 'db_connection.php'; //Iekļaujam savienojuma failu

try {

    /* Atlasām datus no tabulas */
    $sth = $pdo->prepare("SELECT o.*, od.doctor_offer_date, od.doctor_offer_time, d.fullname FROM offers o LEFT JOIN doctor_offers od ON o.id = od.offer_id INNER JOIN patients d ON o.patient_id = d.id WHERE o.doctor_id = $id");
    // $sth = $pdo->prepare("SELECT * FROM users");
    $sth->execute();

    /* Iegūstam visus ierakstus ar fetchAll() funkciju */
    // echo "DB tabulas saturs:<br>";
    $result = $sth->fetchAll();
    // print_r($result);
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}