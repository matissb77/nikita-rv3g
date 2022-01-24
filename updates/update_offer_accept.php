<?php
require_once 'db_connection.php';

try {
    $sql = "UPDATE offers
    SET is_accepted=1
    WHERE id = $offerId";
    $pdo->exec($sql);
    // echo "Viss sagaja";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}