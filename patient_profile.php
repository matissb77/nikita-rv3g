<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/nav-style.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/home-style.css" />
    <link rel="stylesheet" href="css/patient-profile-style.css" />
</head>

<body>
    <main>
        <?php include 'nav.php'; ?>
        <?php
        $id = $_GET['id'];
        require_once 'selects/select_patient_data.php'; ?>
        <section class="container profile-container">
            <div class="container info-container">
                <!-- <div id="user-img-container">
                    <img src="bildes/user-pic.png" alt="" />
                </div> -->
                <div class="container main-info-container">
                    <div>
                        <h3><?= $result[0]['fullname']; ?></h3>
                        <p>vārds</p>
                    </div>
                    <div>
                        <h3><?= $result[0]['birthdate']; ?></h3>
                        <p>dzimsanas datums</p>
                    </div>
                    <div>
                        <h3><?= $result[0]['gender']; ?></h3>
                        <p>dzimums</p>
                    </div>
                </div>
                <div id="img-container">
                    <img src="bildes/pateint-profile.png" alt="" />
                </div>
            </div>
            <section id="patient-form">
                <form action="forms/save_user_info.php" method="post">
                    <div class="container" style="width: 100%">
                        <h3>Vispārīga informācija</h3>
                        <div class="container" style="
                                flex-direction: row;
                                justify-content: space-between;
                                padding: 0;
                            ">
                        </div>

                        <input type="text" style="display: none;" value="<?= $id; ?>" name="id">

                        <label for="height">garums(cm)</label>
                        <input id="height" class="reg-inp" name="height" placeholder="190" autocomplete="off"
                            value="<?= $result[0]['height']; ?>" />

                        <label for="weight">svars(kg)</label>
                        <input class="reg-inp" id="weight" name="weight" placeholder="82" autocomplete="off"
                            value="<?= $result[0]['weight_']; ?>" />

                        <label for="email">e-pasts</label>
                        <input class="reg-inp lrg" id="email" type="email" name="email" placeholder="mans@gmail.com"
                            autocomplete="off" value="<?= $result[0]['email']; ?>" />

                        <label for="phone">telefona nr.</label>
                        <input class="reg-inp lrg" type="tel" id="phone" name="phone" placeholder="## ### ###"
                            autocomplete="off" value="<?= $result[0]['phone']; ?>" />

                        <label for="workplace">darba vieta/izglītības iestāde</label>
                        <input class="reg-inp lrg" id="workplace" name="workplace" placeholder="rv3g" autocomplete="off"
                            value="<?= $result[0]['workplace']; ?>" />

                        <h3 style="margin-top: 4em">Medicībiskā vēsture</h3>

                        <label for="alergies">Medikametnu alergijas</label>
                        <textarea id="w3review" id="alergies" name="alergies" rows="4"
                            cols="5"> <?= $result[0]['alergies']; ?></textarea>

                        <label for="healthProblems">Bijušie un esošie veselības traucējumi</label>
                        <textarea id="w3review" id="healthProblems" name="healthProblems" rows="4"
                            cols="5"><?= $result[0]['health_problems']; ?></textarea>

                        <label for="currentMeds">Pašreiz izmantotie medikamenti</label>
                        <textarea id="w3review" id="currentMeds" name="currentMeds" rows="4"
                            cols="5"><?= $result[0]['current_meds']; ?></textarea>

                        <h3 style="margin-top: 4em">
                            Veselīgi/Neveselīgi ieradumi
                        </h3>
                        <fieldset id="sports-field">
                            <p style="margin-top: 5rem">Sportošana</p>
                            <div>
                                <input type="radio" id="1-sport" name="sports-field" value="1-sport" />
                                <label style="margin-top: 0" for="1-sport">nesportoju</label>
                            </div>
                            <div>
                                <input type="radio" id="2-sport" name="sports-field" value="2-sport" />
                                <label style="margin-top: 0" for="2-sport">1-2 reizes nedēļā</label>
                            </div>
                            <div>
                                <input type="radio" id="3-sport" name="sports-field" value="3-sport" />
                                <label style="margin-top: 0" for="3-sport">3-4 reizes nedēļā</label>
                            </div>
                            <div>
                                <input type="radio" id="4-sport" name="sports-field" value="4-sport" />
                                <label style="margin-top: 0" for="4-sport">5+ reizes nedēļā</label>
                            </div>
                        </fieldset>

                        <fieldset id="food-field">
                            <p style="margin-top: 5rem">Ēšana</p>
                            <div>
                                <input type="radio" id="1-food" name="food-field" value="1-food" />
                                <label style="margin-top: 0" for="1-food">nesekoju līdzi tam, ko ēdu</label>
                            </div>
                            <div>
                                <input type="radio" id="2-food" name="food-field" value="2-food" />
                                <label style="margin-top: 0" for="2-food">sekoju līdzi tam, ko ēdu</label>
                            </div>
                            <div>
                                <input type="radio" id="3-food" name="food-field" value="3-food" />
                                <label style="margin-top: 0" for="3-food">ēdu pēc izstrādāta diētas plāna</label>
                            </div>
                        </fieldset>

                        <fieldset id="alcohol-field">
                            <p style="margin-top: 5rem">Alkohols</p>
                            <div>
                                <input type="radio" id="1-alchohol" name="alcohol-field" value="1-alchohol" />
                                <label style="margin-top: 0" for="1-alchohol">ikdienā neizmantoju</label>
                            </div>
                            <div>
                                <input type="radio" id="2-alchohol" name="alcohol-field" value="2-alchohol" />
                                <label style="margin-top: 0" for="2-alchohol">1-2 glāzes nedēļā</label>
                            </div>
                            <div>
                                <input type="radio" id="3-alchohol" name="alcohol-field" value="3-alchohol" />
                                <label style="margin-top: 0" for="3-alchohol">3-4 glāzes nedēļā</label>
                            </div>
                            <div>
                                <input type="radio" id="4-alchohol" name="alcohol-field" value="4-alchohol" />
                                <label style="margin-top: 0" for="4-alchohol">5+ glāzes nedēļā</label>
                            </div>
                        </fieldset>

                        <fieldset id="caffeine-field">
                            <p style="margin-top: 5rem">Kofeīns</p>
                            <div>
                                <input type="radio" id="1-caffeine" name="caffeine-field" value="1-caffeine" />
                                <label style="margin-top: 0" for="1-caffeine">ikdienā neizmantoju</label>
                            </div>
                            <div>
                                <input type="radio" id="2-caffeine" name="caffeine-field" value="2-caffeine" />
                                <label style="margin-top: 0" for="2-caffeine">1-2 glāzes dienā</label>
                            </div>
                            <div>
                                <input type="radio" id="3-caffeine" name="caffeine-field" value="3-caffeine" />
                                <label style="margin-top: 0" for="3-caffeine">3-4 glāzes dienā</label>
                            </div>
                            <div>
                                <input type="radio" id="4-caffeine" name="caffeine-field" value="4-caffeine" />
                                <label style="margin-top: 0" for="4-caffeine">5+ glāzes dienā</label>
                            </div>
                        </fieldset>

                        <fieldset id="smoking-field">
                            <p style="margin-top: 5rem">Smēķēšana</p>
                            <div>
                                <input type="radio" id="1-smoking" name="smoking-field" value="1-smoking" />
                                <label style="margin-top: 0" for="1-smoking">ikdienā nesmēķēju</label>
                            </div>
                            <div>
                                <input type="radio" id="2-smoking" name="smoking-field" value="2-smoking" />
                                <label style="margin-top: 0" for="2-smoking">0-1 paciņas dienā</label>
                            </div>
                            <div>
                                <input type="radio" id="3-smoking" name="smoking-field" value="3-smoking" />
                                <label style="margin-top: 0" for="3-smoking">1-2 paciņas dienā</label>
                            </div>
                            <div>
                                <input type="radio" id="4-smoking" name="smoking-field" value="4-smoking" />
                                <label style="margin-top: 0" for="4-smoking">2+ paciņas dienā</label>
                            </div>
                        </fieldset>

                        <label for="comments">Citi komentāri par savu veselības stāvokli</label>
                        <textarea id="comments" name="comments" rows="4"
                            cols="5"><?= $result[0]['comments']; ?></textarea>

                        <? if (!isset($_GET['isDoctor'])) { ?>
                        <input class="submit" type="submit" value="Saglabāt" style="margin-top: 5em" />
                        <? } ?>
                    </div>
                </form>
            </section>
        </section>
    </main>
</body>

</html>
<script>
const patientInfo = <?= json_encode($result[0]); ?>;
const isDoctor = <?= (isset($_GET['isDoctor']) ? $_GET['isDoctor'] : 0) ?>;
const inputs = document.getElementsByTagName('input');
const textAreas = document.getElementsByTagName("textarea");


// console.log(isDoctor);

document.getElementById("" + patientInfo.alcohol).checked = true;
document.getElementById("" + patientInfo.caffeine).checked = true;
document.getElementById("" + patientInfo.eating).checked = true;
document.getElementById("" + patientInfo.smoking).checked = true;
document.getElementById("" + patientInfo.sports).checked = true;

if (isDoctor == 1) {
    document.querySelector(".nav-container").style.display = "none";
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].readOnly = true;
        inputs[i].disabled = true;
    }
    for (let i = 0; i < textAreas.length; i++) {
        textAreas[i].readOnly = true;
    }
} else {
    const activeLink = document.querySelector("#profile-link");
    activeLink.classList.add("active-link");
}
</script>