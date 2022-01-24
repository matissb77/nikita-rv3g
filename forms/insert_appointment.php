<?php
$patientId = $_POST['id'];
$doctorId = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];
$firstTime = $_POST['first-time'];
$isAccepted = 0;

require_once '../inserts/insert_patient_appointment.php';
header("location: http://nlukasins.progpamati.lv/appointments.php?id=$patientId");