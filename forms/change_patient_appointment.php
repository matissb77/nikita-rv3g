<?php
$offerId = $_POST['offer-id'];
$patientId = $_POST['patient-id'];
if (isset($_POST['accept-offer'])) {
    require_once '../updates/update_offer_accept.php';
    header("location: http://nlukasins.progpamati.lv/appointments.php?id=$patientId");
} else {
    require_once '../updates/update_offer_deny.php';
    header("location: http://nlukasins.progpamati.lv/appointments.php?id=$patientId");
}