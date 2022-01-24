<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />
    <title>Pieslēgšanās</title>
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/home-style.css" />
    <link rel="stylesheet" href="css/patient-profile-style.css" />
    <link rel="stylesheet" href="css/login-style.css" />
</head>

<body>
    <main>
        <? if (isset($_GET['repeatTimes'])) {
            $repeatTimes = $_GET['repeatTimes'];
        } else {
            $repeatTimes = 0;
        } ?>
        <div id="logo-img-div">
            <a href="index.php"><img id="logo-img" src="bildes/logo.PNG" alt="" width="10%" /></a>
        </div>
        <form id="login-form" action="forms/login_form.php" method="POST">
            <div class="form">
                <input id="name" type="text" name="name" required autocomplete="off" />
                <label for="name" class="label-name">
                    <span class="content-name"> e-pasts/vārds </span>
                </label>
            </div>
            <div class="form">
                <input id="name" type="text" name="password" required autocomplete="off" />
                <label for="name" class="label-name">
                    <span class="content-name"> parole </span>
                </label>
            </div>
            <div class="tooltip" style="padding:1rem">
                <button id="login" type="submit">pieslēgties</button>
                <span class="tooltiptext">ja esi ārsts, pieslēdzies ar savu vārdu un paroli, ja
                    nē, tad ar e-pasta adresi</span>
            </div>
            <input style="display:none;" type="text" name="loginRepeat" value="<?= $repeatTimes; ?>">
            <br />
        </form>
        <div style="padding:1rem" id="register-btn-div">
            <button id="register-btn" onclick="showForm()">
                reģistrēties
            </button>
        </div>
        <section id="patient-form" style="display: none">
            <form action="forms/login_register.php" method="post">
                <div class="container" style="width: 100%">
                    <h3>Vispārīga informācija</h3>
                    <div class="container" style="
                                flex-direction: row;
                                justify-content: space-between;
                                padding: 0;
                            ">
                        <div class="form">
                            <input id="name" type="text" name="firstname" required autocomplete="off" />
                            <label for="name" class="label-name">
                                <span class="content-name"> vārds </span>
                            </label>
                        </div>
                        <div class="form">
                            <input id="lastname" type="text" name="lastname" required autocomplete="off" />
                            <label for="lastname" class="label-name">
                                <span class="content-name"> uzvārds </span>
                            </label>
                        </div>
                    </div>
                    <div class="form">
                        <input id="password" type="text" name="password" required autocomplete="off" />
                        <label for="password" class="label-name">
                            <span class="content-name"> parole </span>
                        </label>
                    </div>

                    <label for="gender">dzimums</label>
                    <select name="gender" id="gender">
                        <option value="Vīrietis">Vīrietis</option>
                        <option value="Sieviete">Sieviete</option>
                        <option value="Cits">Cits</option>
                    </select>

                    <label for="height">garums(cm)</label>
                    <input id="height" class="reg-inp" name="height" placeholder="190" autocomplete="off" />

                    <label for="weight">svars(kg)</label>
                    <input class="reg-inp" id="weight" name="weight" placeholder="82" autocomplete="off" />

                    <label for="email">e-pasts</label>
                    <input class="reg-inp lrg" id="email" type="email" name="email" placeholder="mans@gmail.com"
                        autocomplete="off" />

                    <label for="phone">telefona nr.</label>
                    <input class="reg-inp lrg" type="tel" id="phone" name="phone" placeholder="## ### ###"
                        autocomplete="off" />

                    <label for="workplace">darba vieta/izglītības iestāde</label>
                    <input class="reg-inp lrg" id="workplace" name="workplace" placeholder="rv3g" autocomplete="off" />

                    <label for="date">dzimšanas datums</label><br />
                    <input style="width: 100%" id="date" class="reg-inp" type="date" name="date" id="date" />

                    <h3 style="margin-top: 4em">Medicībiskā vēsture</h3>

                    <label for="alergies">Medikametnu alergijas</label>
                    <textarea id="w3review" id="alergies" name="alergies" rows="4" cols="5"></textarea>

                    <label for="healthProblems">Bijušie un esošie veselības traucējumi</label>
                    <textarea id="w3review" id="healthProblems" name="healthProblems" rows="4" cols="5"></textarea>

                    <label for="currentMeds">Pašreiz izmantotie medikamenti</label>
                    <textarea id="w3review" id="currentMeds" name="currentMeds" rows="4" cols="5"></textarea>

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
                    <textarea id="comments" name="comments" rows="4" cols="5"></textarea>

                    <input id="register" class="submit" type="submit" value="Reģistrēties" style="margin-top: 5em" />
                </div>
            </form>
        </section>
        <div id="bcg-img-div">
            <img src="bildes/intro-hospital - Copy.jpg" alt="" width="70%" />
        </div>
    </main>
</body>

</html>
<script>
let repeatTimes = <?= $repeatTimes; ?>;
const showForm = () => {
    document.getElementById("login-form").style.display = "none";
    document.getElementById("register-btn-div").style.display = "none";
    document.getElementById("patient-form").style.display = "block";
};

if (repeatTimes == 3) {
    document.querySelector("#register-btn").disabled = true;
    document.querySelector("#login").disabled = true;

    function disableElement() {
        document.querySelector("#register-btn").disabled = false;
        document.querySelector("#login").disabled = false;
        window.location.href = "http://nlukasins.progpamati.lv/";

    }

    setTimeout(disableElement, 1000 * 60 * 5);
}
</script>