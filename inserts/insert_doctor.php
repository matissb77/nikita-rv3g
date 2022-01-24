<?php
require_once '../db_connection.php'; //Iekļaujam savienojuma failu

try {

    $sql = "INSERT INTO doctors(fullname, birthdate, workplace, specialization, profile_imge) VALUES ('Ēteris Jansons', STR_TO_DATE('September 10 1950', '%M %d %Y'), 'Bērnu klīniskā universitātes slimnīca', 'Neirologs', 'neurologist.jpg')";

    //Ar exec() izpildām vaicājumu
    $pdo->exec($sql);
    // echo "dakteris izveidots!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}