<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    $timestamp = strtotime($date);
    $DATE = date("Y-m-d", $timestamp);
    $sql = 'INSERT INTO patients(fullname, birthdate, email, phone, workplace, gender, height, weight_, alergies, health_problems, current_meds, sports, eating, alcohol, caffeine, smoking, comments, profile_imge) VALUES ("' . $fullname . '", "' . $date . '", "' . $email . '", "' . $phone . '", "' . $workplace . '", "' . $gender . '", ' . $height . ', ' . $weight . ', "' . $alergies . '", "' . $healthProblems . '", "' . $currentMeds . '", "' . $sportField . '", "' . $foodField . '", "' . $alchoholField . '", "' . $caffeineField . '", "' . $smokingField . '", "' . $comments . '", "profile.jpg")';

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "user izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}