<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    $timestamp = strtotime($date);
    $DATE = date("Y-m-d", $timestamp);
    $sql = "INSERT INTO offers(patient_id, doctor_id, offer_date, offer_time, is_accepted, first_time) VALUES ($patientId, $doctorId, '" . $date . "', '" . $time . "', $isAccepted, $firstTime)";

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "appointment izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}