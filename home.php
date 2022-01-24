<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />
    <title>Nikitas lapa</title>
    <link rel="stylesheet" href="css/nav-style.css" />
    <link rel="stylesheet" href="css/home-style.css" />
    <link rel="stylesheet" href="css/general.css">
</head>

<body>
    <?php include 'nav.php';
    require_once 'selects/select_doctors.php'; ?>
    <section id="intro-section">
        <img src="bildes/intro-hospital.jpg" width="30" />
        <div id="intro-section-text">
            <h1>Vēlies ērti pierakstīties pie ārsta?</h1>
            <h2>
                pieraksties tikai
                <span style="color: #ff9e55">dažu klikšķu </span>laikā
            </h2>
        </div>
    </section>
    <section id="appointment-form">
        <h2>aizpildiet pieteikuma formu un gaidiet ārsta atbildi</h2>
        <form action="forms/insert_appointment.php" method="POST">
            <div class="container">
                <label for="doctor">ārsts*</label>
                <select class="lrg" name="doctor" id="doctor">
                    <? for ($i = 0; $i < count($result); $i++) :
                        echo '
                    <option value="' . $result[$i]['id'] . '">' . $result[$i]['fullname'] . '</option>';
                    endfor; ?>
                </select>
                <div id="date-time-container">
                    <div>
                        <label for="date">datums*</label><br />
                        <input style="width: 100%" class="reg-inp" type="date" name="date" id="date" />
                    </div>
                    <div>
                        <label for="time">laiks</label><br />
                        <input style="width: 100%; padding: 0.4em;" class="reg-inp" type="text" name="time" id="time"
                            placeholder="10:00 - 11:00" />

                    </div>
                </div>

                <p style="margin-top: 5rem">Pirmo reizi apmeklējiet?</p>
                <div style="margin-bottom: 0.5em">
                    <input type="radio" id="yes" name="first-time" value="1" />
                    <label style="margin-top: 0" for="yes">jā</label>
                </div>
                <div style="margin-bottom: 5rem">
                    <input type="radio" id="no" name="first-time" value="0" />
                    <label style="margin-top: 0" for="no">nē</label>
                </div>
                <input class="submit" type="submit" value="Nōsūtīt pierakstu ārstam" />
            </div>
            <!--
                    <input type="submit" /> -->
            <!-- </div> -->
            <input style="display: none;" type="text" name="id" value="<?= $_GET['id']; ?>">
        </form>
        <img src="bildes/doctor-wait.png" alt="" />
    </section>
</body>

</html>
<script>
const activeLink = document.querySelector("#home-link");
activeLink.classList.add("active-link");
</script>