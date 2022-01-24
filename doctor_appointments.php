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
    <link rel="stylesheet" href="css/doctor-appointment-style.css" />
    <link rel="stylesheet" href="css/doctor-nav-style.css" />
</head>

<body>
    <main style="
                height: 100vh;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            ">
        <?php include 'doctor_nav.php';
        $id = $_GET['id'];
        require_once 'selects/select_doctor_appointments.php';
        // print_r($result);
        ?>
        <div class="container big-appoint-container">
            <div id="img-div">
                <img src="bildes/checklist.png" alt="" />
            </div>
            <section class="container appoint-container">
                <h3 style="text-align: center; margin-bottom: 1em">
                    pacientu sūtītie pieteikumi
                </h3>
                <div id="overflow-div">
                    <? for ($i = 0; $i < count($result); $i++) : ?>
                    <div class="container appointment-item-container">
                        <div class="container" style="
                                    width: 100%;
                                    justify-content: space-between;
                                    align-items: center;
                                ">
                            <div class="container appointment-info-container" style="width: 100%">
                                <p> <a target="_blank"
                                        href="patient_profile.php?id=<?= $result[$i]['patient_id']; ?>&isDoctor=1">Pacients
                                        -
                                        <?= $result[$i]['fullname']; ?></a></p>
                                <? if (($result[$i]['is_accepted'] == 1 && isset($result[$i]['doctor_offer_date'])) || ($result[$i]['is_accepted'] == 3 && isset($result[$i]['doctor_offer_date'])) || $result[$i]['is_accepted'] == 2) { ?>
                                <p>Datums - <?= $result[$i]['doctor_offer_date']; ?></p>
                                <p>Laiks - <?= $result[$i]['doctor_offer_time']; ?></p>
                                <? } elseif ($result[$i]['is_accepted'] == 1 || $result[$i]['is_accepted'] == 3 || $result[$i]['is_accepted'] == 0) { ?>
                                <p>Datums - <?= $result[$i]['offer_date']; ?></p>
                                <p>Laiks - <?= $result[$i]['offer_time']; ?></p>
                                <? } ?>
                                <? if ($result[$i]['is_accepted'] == 0) { ?>
                                <div style="border-top: 2px solid black">
                                    <form action="forms/change_doctor_appointment.php" method="post">
                                        <input type="text" style="display: none;" name="offer-id"
                                            value="<?= $result[$i]['id'] ?>">
                                        <input type="text" style="display: none;" name="doctor-id"
                                            value="<?= $result[$i]['doctor_id'] ?>">
                                        <button tpye="submit" name="accept" class="accept-btn">
                                            Apstiprināt</button><br />
                                        <div class="container" style="
                                                justify-content: space-between;
                                            ">
                                            <button type="submit" name="new-time" class="new-time-btn">
                                                Piedāvāt citu
                                                <span><br /></span> datumu/laiku
                                            </button>
                                            <div style="margin-top: 1.5em">
                                                <label for="date">datums</label><br />
                                                <input style="width: 100%" class="reg-inp" type="date" name="date"
                                                    id="date" />
                                            </div>
                                            <div style="margin-top: 1.5em">
                                                <label for="time">laiks</label><br />
                                                <input style="width: 100%; padding: 0.4em;" class="reg-inp" type="text"
                                                    name="time" name="time" id="time" placeholder="10:00 - 11:00" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <? } else { ?>
                            </div>

                            <? if ($result[$i]['is_accepted'] == 1) { ?>
                            <img src="bildes/green-check.png" width="10%" height="30%" alt="" />
                            <? } elseif ($result[$i]['is_accepted'] == 3) { ?>
                            <img src="bildes/red-check.png" width="8%" height="30%" alt="" />
                            <? } else { ?>
                            <img src="bildes/waiting-check.svg" width="10%" height="30%" alt="" />
                            <? } ?>
                            <? } ?>
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
const page = document.getElementById("doctor-appoint");
page.classList.add("active-link");
</script>