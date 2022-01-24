<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$fullname = $firstname . " " . $lastname;
$password = $_POST['password'];
$gender = $_POST['gender'];
$height = str_replace(",", ".", $_POST['height']);
$weight = str_replace(",", ".", $_POST['weight']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$workplace = $_POST['workplace'];
$date = $_POST['date'];
$alergies = $_POST['alergies'];
$healthProblems = $_POST['healthProblems'];
$currentMeds = $_POST['currentMeds'];
$sportField = $_POST['sports-field'];
$foodField = $_POST['food-field'];
$alchoholField = $_POST['alcohol-field'];
$caffeineField = $_POST['caffeine-field'];
$smokingField = $_POST['smoking-field'];
$comments = $_POST['comments'];

// echo $fullname, $password, $gender, $height, $weight, $email, $phone, $workplace, $date, $alergies, $healthProblems, $currentMeds, $sportField, $foodField, $alchoholField, $caffeineField, $smokingField, $comments;
require_once '../inserts/insert_user.php';
require_once '../selects/select_patient_id.php';
$id = $result_id[0]['id'];
// echo $id;
require_once '../inserts/insert_patient_login.php';
header("LOCATION: http://nlukasins.progpamati.lv/home.php?=$id");