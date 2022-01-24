<?php
$id = $_POST['id'];
$height = str_replace(",", ".", $_POST['height']);
$weight = str_replace(",", ".", $_POST['weight']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$workplace = $_POST['workplace'];
$alergies = $_POST['alergies'];
$healthProblems = $_POST['healthProblems'];
$currentMeds = $_POST['currentMeds'];
$sportField = $_POST['sports-field'];
$foodField = $_POST['food-field'];
$alchoholField = $_POST['alcohol-field'];
$caffeineField = $_POST['caffeine-field'];
$smokingField = $_POST['smoking-field'];
$comments = $_POST['comments'];

require_once 'update_user_info.php';
header("Location: http://nlukasins.progpamati.lv/patient_profile.php?id=$id");