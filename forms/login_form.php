<?php
$password = $_POST['password'];
$name = $_POST['name'];
$repeatTimes = $_POST['loginRepeat'];

// echo $name, $password;

if (strpos($name, "@") !== false) {
    require_once '../selects/select_patient_id_login.php';
    $id = $result_id[0]['id'];
    require_once '../selects/select_patient_login.php';
    $dbPassword = $result[0]['psw'];
    // echo $dbPassword;
    if (strcmp($password, $dbPassword) == 0) {
        header("Location: http://nlukasins.progpamati.lv/home.php?id=$id");
    } else {
        $repeatTimes++;
        header("Location: http://nlukasins.progpamati.lv?repeatTimes=$repeatTimes");
    }
} else {
    require_once '../selects/select_doctor_id_login.php';
    $id = $result[0]['id'];
    require_once '../selects/select_doctor_password.php';
    $dbPassword = $result_psw[0]['psw'];
    if (strcmp($password, $dbPassword) == 0) {
        header("Location: http://nlukasins.progpamati.lv/doctor_appointments.php?id=$id");
    } else {
        $repeatTimes++;
        header("Location: http://nlukasins.progpamati.lv?repeatTimes=$repeatTimes");
    }
}