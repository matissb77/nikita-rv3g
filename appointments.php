<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/nav-style.css" />
    <link rel="stylesheet" href="css/patient-appointment-style.css" />
</head>

<body>
    <main style="
                height: 100vh;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            ">
        <?php include 'nav.php';
        $id = $_GET['id'];
        require_once 'selects/select_patient_appointments.php';
        ?>
        <div class="container big-appoint-container">
            <div id="img-div">
                <img src="bildes/patient-wait.png" alt="" />
            </div>
            <section class="container appoint-container">
                <div id="overflow-div">
                    <? for ($i = 0; $i < count($result); $i++) : ?>
                    <div class="container appointment-item-container">
                        <div class="container" style="
                                    justify-content: space-around;
                                    align-items: center;
                                ">
                            <div class="container appointment-info-container">
                                <p>Ārsts - <?= $result[$i]['fullname']; ?></p>
                                <? if (($result[$i]['is_accepted'] == 1 && isset($result[$i]['doctor_offer_date'])) || ($result[$i]['is_accepted'] == 3 && isset($result[$i]['doctor_offer_date']))) { ?>
                                <p>Datums - <?= $result[$i]['doctor_offer_date']; ?></p>
                                <p>Laiks - <?= $result[$i]['doctor_offer_time']; ?></p>
                                <? } elseif ($result[$i]['is_accepted'] == 0 || $result[$i]['is_accepted'] == 1 || $result[$i]['is_accepted'] == 3) { ?>
                                <p>Datums - <?= $result[$i]['offer_date']; ?></p>
                                <p>Laiks - <?= $result[$i]['offer_time']; ?></p>
                                <? } ?>
                                <? if ($result[$i]['is_accepted'] == 2) {
                                        echo '                                
                                    <div style="border-top: 2px solid black">
                                    <p>Ārsta piedāvājums :</p>
                                    <p>Datums - ' . $result[$i]['doctor_offer_date'] . '</p>
                                    <p>Laiks - ' . $result[$i]['doctor_offer_time'] . '</p>
                                    <form action="forms/change_patient_appointment.php" method="post">
                                    <input style="display: none;"type="text" name="offer-id" value=' . $result[$i]['id'] . '>
                                    <input style="display: none;"type="text" name="patient-id" value=' . $_GET['id'] . '>
                                    <button type="submit" name="accept-offer" class="accept-btn">
                                        Apstiprināt
                                    </button>
                                    <button type="submit" name="deny-offer" class="delete-btn">
                                        Noliegt
                                    </button>
                                    </form>
                                </div>';
                                    } ?>
                            </div>
                            <? if ($result[$i]['is_accepted'] == 0 || $result[$i]['is_accepted'] == 2) {
                                    echo '<img src="bildes/waiting-check.svg" width="10%" height="30%" alt="" />';
                                } elseif ($result[$i]['is_accepted'] == 1) {
                                    echo '<img src="bildes/green-check.png" width="8%" height="30%" alt="" />';
                                } else {
                                    echo '<img src="bildes/red-check.png" width="8%" height="30%" alt="" />';
                                } ?>
                        </div>
                    </div>
                    <? endfor; ?>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
<script>
const activeLink = document.querySelector("#appointments-link");
activeLink.classList.add("active-link");
</script>