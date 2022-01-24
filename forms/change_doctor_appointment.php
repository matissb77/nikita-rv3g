<?php
$offerId = $_POST['offer-id'];
$doctorId = $_POST['doctor-id'];
$date = $_POST['date'];
$time = $_POST['time'];
if (isset($_POST['new-time'])) {
    require_once "../updates/update_offer_new_time.php";
    header("location: http://nlukasins.progpamati.lv/doctor_appointments.php?id=$doctorId");
} else {
    require_once "../updates/update_offer_accept.php";
    header("location: http://nlukasins.progpamati.lv/doctor_appointments.php?id=$doctorId");
}