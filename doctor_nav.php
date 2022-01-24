<?php
echo ' <nav>
                <div class="container nav-container">
                    <a id="doctor-appoint" href="doctor_appointments.php?id=' . $_GET['id'] . '"
                        >Pieraksti</a
                    >
                    <a class="image-link" href="doctor_appointments.php?id=' . $_GET['id'] . '"
                        ><img id="logo-img" src="bildes/logo.PNG" alt=""
                    /></a>
                    <a id="doctor-profile" href="doctor_profile.php?id=' . $_GET['id'] . '">Profils</a>
                </div>
            </nav>';