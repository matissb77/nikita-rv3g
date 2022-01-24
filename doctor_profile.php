<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/nav-style.css" />
    <link rel="stylesheet" href="css/doctor-nav-style.css" />
    <link rel="stylesheet" href="css/doctor-profile-style.css" />
    <title>Document</title>
</head>

<body>
    <main>
        <?php include 'doctor_nav.php';
        $id = $_GET['id'];
        require_once 'selects/select_doctor.php'; ?>
        <section class="container profile-container">
            <div id="img-container">
                <img src="bildes/pateint-profile.png" alt="" />
            </div>
            <div class="container info-container">
                <div id="user-img-container">
                    <img src="bildes/<?= $result[0]['profile_imge'] ?>" alt="" />
                </div>
                <div class="container main-info-container">
                    <div>
                        <h3><?= $result[0]['fullname'] ?></h3>
                        <p>vārds</p>
                    </div>
                    <div>
                        <h3><?= $result[0]['birthdate']; ?></h3>
                        <p>dzimsanas datums</p>
                    </div>
                    <div>
                        <h3><?= $result[0]['workplace']; ?></h3>
                        <p>darba vieta/izglītības iestāde</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
<script>
const page = document.getElementById("doctor-profile");
page.classList.add("active-link");
</script>