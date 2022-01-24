<?php
require_once '../db_connection.php';

try {
    $sql = "UPDATE patients
    SET height=$height, weight_=$weight, email='" . $email . "', phone='" . $phone . "', workplace='" . $workplace . "', alergies='" . $alergies . "', health_problems='" . $healthProblems . "', current_meds='" . $currentMeds . "', sports='" . $sportField . "', eating='" . $foodField . "', alcohol='" . $alchoholField . "', caffeine='" . $caffeineField . "', smoking='" . $smokingField . "', comments='" . $comments . "'
    WHERE id = $id";
    $pdo->exec($sql);
    // echo "Viss sagaja";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}