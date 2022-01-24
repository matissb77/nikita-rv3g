<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/nav-style.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/doctors-style.css" />
    <title>Document</title>
</head>

<body>
    <main>
        <?php include 'nav.php';
        require_once 'selects/select_doctors.php';
        ?>
        <section class="container doctor-section">
            <div class="container">
                <? for ($i = 0; $i < count($result); $i++) :
                    echo '
                <div id="' . $result[$i]['id'] . '" class="container doctor">
                    <img src="bildes/' . $result[$i]['profile_imge'] . '" alt="" />
                    <p>' . $result[$i]['fullname'] . '</p>
                    <p>' . $result[$i]['workplace'] . '</p>
                    <p>' . $result[$i]['specialization'] . '</p>
                </div>';
                endfor; ?>
            </div>
            <div></div>
        </section>
    </main>
    <img id="abs-img" src="bildes/doctor.png" alt="" />
</body>

</html>
<script>
const activeLink = document.querySelector("#doctors-link");
activeLink.classList.add("active-link");
</script>