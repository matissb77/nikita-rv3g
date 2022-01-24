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
        <?php include 'doctor_nav.php'; ?>
        <div class="container big-appoint-container">
            <div id="img-div">
                <img src="bildes/checklist.png" alt="" />
            </div>
            <section class="container appoint-container">
                <h3 style="text-align: center; margin-bottom: 1em">
                    pacientu sūtītie pieteikumi
                </h3>
                <div id="overflow-div">
                    <div class="container appointment-item-container">
                        <div class="container" style="
                                    width: 100%;
                                    justify-content: space-between;
                                    align-items: center;
                                ">
                            <div class="container appointment-info-container">
                                <p>Ārsts - Jānis Stepanovs(ķirurgs)</p>
                                <p>Datums - 08.04.2021</p>
                                <p>Laiks - 17:00</p>
                            </div>
                            <img src="bildes/green-check.png" width="8%" height="30%" alt="" />
                        </div>
                    </div>
                    <div class="container appointment-item-container">
                        <div class="container" style="
                                    width: 100%;
                                    justify-content: space-between;
                                    align-items: center;
                                ">
                            <div class="container appointment-info-container" style="width: 100%">
                                <p>Ārsts - Jānis Stepanovs(ķirurgs)</p>
                                <p>Datums - 08.04.2021</p>
                                <p>Laiks - 17:00</p>
                                <div style="border-top: 2px solid black">
                                    <button class="accept-btn">
                                        Apstiprināt</button><br />
                                    <div class="container" style="
                                                justify-content: space-between;
                                            ">
                                        <button class="new-time-btn">
                                            Piedāvāt citu
                                            <span><br /></span> datumu/laiku
                                        </button>
                                        <div style="margin-top: 1.5em">
                                            <label for="date">datums</label><br />
                                            <input style="width: 100%" class="reg-inp" type="date" name="date"
                                                id="date" />
                                        </div>
                                        <div style="margin-top: 1.5em">
                                            <label for="date">laiks</label><br />
                                            <select style="width: 100%" class="lrg" name="gender" id="gender">
                                                <option value="id_doctor">
                                                    10:00 - 11:00
                                                </option>
                                                <option value="female">
                                                    11:00 - 12:00
                                                </option>
                                                <option value="female">
                                                    12:00 - 13:00
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container appointment-item-container">
                        <div class="container" style="
                                    justify-content: space-between;
                                    align-items: center;
                                ">
                            <div class="container appointment-info-container">
                                <p>Ārsts - Jānis Stepanovs(ķirurgs)</p>
                                <p>Datums - 08.04.2021</p>
                                <p>Laiks - 17:00</p>
                            </div>
                            <img src="bildes/red-check.png" width="8%" height="30%" alt="" />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>