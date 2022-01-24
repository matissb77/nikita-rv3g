<?php
require_once 'db_connection.php';

try {

    //Izveidojam jaunu tabulu
    $sql1 = "CREATE TABLE patients (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(70) NOT NULL,
    birthdate date NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    workplace VARCHAR(70),
    gender VARCHAR(20),
    height DECIMAL(3,1),
    weight_ DECIMAL(4,1),
    alergies VARCHAR(255),
    health_problems VARCHAR(255),
    current_meds VARCHAR(255),
    sports VARCHAR(30),
    eating VARCHAR(30),
    alcohol VARCHAR(30),
    caffeine VARCHAR(30),
    smoking VARCHAR(30),
    comments VARCHAR(255)
    )";

    $sql2 = "CREATE TABLE doctors(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(70) NOT NULL,
    birthdate date,
    workplace VARCHAR(70),
    specialization VARCHAR(50)   
    )";

    $sql3 = "CREATE TABLE patient_logins(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id INT(6) NOT NULL,
    psw VARCHAR(255)
    )";

    $sql4 = "CREATE TABLE doctor_logins(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    doctor_id INT(6) NOT NULL,
    psw VARCHAR(255)
    )";

    $sql5 = "CREATE TABLE offers(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    patient_id INT(6) NOT NULL,
    doctor_id INT(6) NOT NULL,
    offer_date date,
    offer_time time,
    is_accepted BIT,
    first_time BIT
    )";

    $sql6 = "CREATE TABLE doctor_offers(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    offer_id INT(6) NOT NULL,
    doctor_offer_date date,
    doctor_offer_time time
    )";

    //ALTER TABLE patients ADD profile_pic VARCHAR(255)
    //ALTER TABLE doctors ADD profile_pic VARCHAR(255)

    $alter = "ALTER TABLE offers
MODIFY COLUMN first_time TINYINT";

    // $pdo->exec($sql1);
    // $pdo->exec($sql2);
    // $pdo->exec($sql3);
    // $pdo->exec($sql4);
    // $pdo->exec($sql5);
    $pdo->exec($alter);
    echo "Tabulas izveidotas veiksmīgi!";
} catch (\PDOException $e) {

    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}