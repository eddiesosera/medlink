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


            <?php
            $query_slct_patient = "
                select patient.*, medical_aid.*, illness_types.*
                from patient, medical_aid , illness_types 
                where patient.patient_medicalAid_id=medical_aid.medicalAid_id and patient.patient_illnesType_id=illness_types.illness_id";

            $result = mysqli_query($con, $query_slct_patient);

            if (isset($_GET['selected_id'])) {

                echo '<div class="patients_body_wrap_inner">';

                while ($slct_patient = mysqli_fetch_assoc($result)) {

                    if ($_GET['selected_id'] == $slct_patient['patient_id']) {

                        echo '<div class="patients_body_l_wrap_view">';
                        echo '<div class="patients_body_l_top">';
                        echo '<img class="selected_patient_img" src="img/patients/' . $slct_patient['patient_profile_url'] . '"alt="Patient Profile Image" />';
                        echo '</div>';
                        echo '<div class="selected_patients_info_wrap">';
                        echo '<div class="selected_patients_body_l_mid_itm">';
                        echo '<div class="patients_body_l_mid_fname"><b>' . $slct_patient['patient_name'] . " " . $slct_patient['patient_surname'] . '</b></div>';
                        echo '<div class="patients_body_l_mid_govId">' . "#" . $slct_patient['patient_gov_id'] . '</div>';
                        echo '</div>';
                        echo '<div class="selected_patients_body_l_mid_itm">';
                        echo  '<div class="selected_patients_label">Medical Condition</div>';
                        echo   '<div class="patients_body_l_mid_spec_contact_illness">' . $slct_patient['illness_title'] . '</div>';
                        echo   '<div class="selected_patients_label">Medical Aid</div>';
                        echo   '<div class="patients_body_l_mid_spec_contact_mdclAid">' . $slct_patient['medicalAid_organization'] . '</div>';
                        echo '</div>';
                        echo  '<div class="selected_patients_body_l_mid_itm">';
                        echo     '<div class="selected_patients_label">Phone Number</div>';
                        echo      '<div class="patients_body_l_mid_contact_nmbr">' . "+27" . $slct_patient['patient_phone_number'] . '</div>';
                        echo       '<div class="selected_patients_label">Email adress</div>';
                        echo        '<div class="patients_body_l_mid_contact_email">' . $slct_patient['patient_email'] . '</div>';
                        echo    '</div>';

                        echo   ' <div class="selected_patients_body_l_mid_itm">';
                        echo        '<div class="patients_body_l_mid_2_extra">';
                        echo            '<div class="selected_patients_label">Gender</div>';
                        echo            '<div class="patients_body_l_mid_2_extra_gender">' . $slct_patient['patient_gender'] . '</div>';
                        echo            '<div class="selected_patients_label">Date of Birth</div>';
                        echo            '<div class="patients_body_l_mid_2_extra_age">' . $slct_patient['patient_age'] . '</div>';
                        echo        '</div>';
                        echo    '</div>';
                        echo '</div>';
                        echo '<div class="patients_body_l_bttm">';
                        echo    ' <a href=""><button class="top_secondary_btn patients_body_l_bttm_interact_edit">';
                        echo 'New Appointment';
                        echo '</button></a>';
                        echo  ' </div>';
                        echo  '</div>';
                    }
                }

                echo '</div>';
            }

            ?>

            <script type="text/javascript">
            let sidebar = document.querySelector(".sidebar");

            let top = localStorage.getItem("sidebar-scroll");
            if (top !== null) {
                sidebar.scrollTop = parseInt(top, 10);
            }

            window.addEventListener("beforeunload", () => {
                localStorage.setItem("sidebar-scroll", sidebar.scrollTop);
            });
            </script>


        </div>


</body>

</html>