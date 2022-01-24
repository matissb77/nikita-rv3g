<?php echo '
<nav>
    <div class="container nav-container">
        <a class="image-link" href=""><img id="logo-img" src="bildes/logo.PNG" alt="" /></a>
        <ul id="links">
            <li><a id="home-link"  href="home.php?id=' . $_GET['id'] . '">Pieteikšanās</a></li>
            <li><a id="appointments-link" href="appointments.php?id=' . $_GET['id'] . '">Pieraksti</a></li>
            <li><a id="doctors-link" href="doctors.php?id=' . $_GET['id'] . '">Ārsti</a></li>
            <li><a id="profile-link" href="patient_profile.php?id=' . $_GET['id'] . '">Profils</a></li>
        </ul>
    </div>
</nav>
';