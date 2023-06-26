<?php

session_start();
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medlink: Patients</title>
    <style>
    <?php include 'index.css';
    include './style/patients_doctors.css';
    ?>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

    <!-- Sidebar init -->
    <?php

    include './sidebar/sidebar.php';
    include 'config.php';
    ?>

    <!-- Patients Content -->
    <div class="patients_wrap">
        <div class="patients_top_wrap">
            <div class="patients_top_wrap_l_heading">
                Patients
            </div>
            <div class="patients_top_wrap_r_interact_wrap">
                <a href="component_ui/appointments/new_appointment.php">
                    <button class="top_secondary_btn patients_top_wrap_r_interact_wrap_newAppointment">
                        New Appointment
                    </button>
                </a>
                <a href="component_ui/patients/new_patient.php">
                    <button class="top_primary_btn patients_top_wrap_r_interact_wrap_newPatient">
                        Add New Patient
                    </button>
                </a>
            </div>
        </div>

        <hr class="hr_midbody" />


        <div class="patients_body_wrap">

            <div class="patients_body_wrap_r_list">
                <div class="patients_body_wrap_r_list_top">
                    <form class="patients_body_wrap_r_list_top_l_interactive">
                        <div class="home_content_top_interaction-search-wrap">
                            <i class="searchIcon ri-search-2-line"></i>
                            <input id="searchInput" type="search" placeholder="Search session details" />
                        </div>
                        <a href=""><button class="patient_searc primary_btn_sml">Search</button></a>
                    </form>
                </div>
                <div class="patients_body_wrap_r_list_bttm">

                    <?php
                    include 'component_crud/patient/read_patient.php';
                    ?>

                </div>

            </div>

            <!-- Left card displaying patients  -->
            <div class="patients_body_wrap_inner">

                <?php
                $query_ = "
                select patient.*, medical_aid.*, illness_types.*
                from patient , medical_aid , illness_types
                where patient.patient_medicalAid_id=medical_aid.medicalAid_id and patient.patient_illnesType_id=illness_types.illness_id";
                ?>

                <div href="/DV200_Term2_Receptionist-Dashboard/Term-2/app/patients.php?id=1"
                    class="patients_body_l_wrap_view">
                    <div class="patients_body_l_top">
                        <img class="selected_patient_img" src="img/patients/onur-senay-Ip5ySbJmX9E-unsplash.jpg"
                            alt="Patient Profile Image" />
                    </div>
                    <div class="selected_patients_info_wrap">
                        <div class="selected_patients_body_l_mid_itm">
                            <div class="patients_body_l_mid_fname"><b>Chelsey Dietrich</b></div>
                            <div class="patients_body_l_mid_govId">#2147483647</div>
                        </div>
                        <div class="selected_patients_body_l_mid_itm">
                            <div class="selected_patients_label">Medical Condition</div>
                            <div class="patients_body_l_mid_spec_contact_illness">Mild Depression</div>
                            <div class="selected_patients_label">Medical</div>
                            <div class="patients_body_l_mid_spec_contact_mdclAid">MediCare</div>
                        </div>
                        <div class="selected_patients_body_l_mid_itm">
                            <div class="selected_patients_label">Phone Number</div>
                            <div class="patients_body_l_mid_contact_nmbr">+2787512345</div>
                            <div class="selected_patients_label">Email adress</div>
                            <div class="patients_body_l_mid_contact_email">edg@gmail.com</div>
                        </div>

                        <div class="selected_patients_body_l_mid_itm">
                            <div class="patients_body_l_mid_2_extra">
                                <div class="selected_patients_label">Gender</div>
                                <div class="patients_body_l_mid_2_extra_gender">Female</div>
                                <div class="selected_patients_label">Date of Birth</div>
                                <div class="patients_body_l_mid_2_extra_age">02-08-1992</div>
                            </div>
                        </div>
                    </div>
                    <div class="patients_body_l_bttm">
                        <a href=""><button
                                class="top_secondary_btn patients_body_l_bttm_interact_edit">Appointment</button></a>
                    </div>
                </div>




            </div>


        </div>


</body>

</html>