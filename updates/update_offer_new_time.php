<?php
require_once 'db_connection.php';

try {
    $sql = "UPDATE offers
    SET is_accepted=2
    WHERE id = $offerId";

    $sql1 = "INSERT INTO doctor_offers (offer_id, doctor_offer_date, doctor_offer_time) VALUES ($offerId, '" . $date . "', '" . $time . "')";

    $pdo->exec($sql1);
    $pdo->exec($sql);
    // echo "Viss sagaja";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}