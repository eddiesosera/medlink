<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medlink: Patients</title>
    <style>
    <?php include '../../index.css';
    include '../../style/patients_doctors.css';
    ?>
    </style>
</head>

<body>

    <?php

    $query = "
    select doctors.*, illness_types.*
    from doctors , illness_types
    where doctors.doctor_speciality_id=illness_types.illness_id
    order by doctor_name";



    $result = mysqli_query($con, $query);

    echo '<ul class="patients_body_wrap_r_list_patientsWrap">';
    while ($doctor = mysqli_fetch_assoc($result)) {

        // URL variable declaration sent to edit page
        $btn_class = "patient_edit_btn";
        $edit_href_begin = "../app/component_ui/doctors/edit_doctor.php";
        $edit_href_id = "?doc_id=" . urlencode($doctor['doctor_id']);

        echo '<li class="patients_body_wrap_r_list_patientItm" key="' . $doctor['doctor_id'] . '">';

        echo '<a  class="patients_patientItm_link"
        href=doctors.php?selected_id=' . $doctor['doctor_id'] . ' >';

        echo '<img class="patientItm_img" src="img/doctors/' . $doctor['doctor_profile_url'] . '" alt="doctor profile"/>';

        echo '<div class="patientItm_deetsWrap">';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">Full Names</div>';
        echo '<div class="patientItm_names">' . "Dr. " . $doctor['doctor_name'] . " " . $doctor['doctor_surname'] . '</div>';
        echo '</div>';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">ID Number</div>';
        echo '<div class="patientItm_phone">' . $doctor['doctor_gov_id'] . '</div>';
        echo '</div>';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">Speciality</div>';
        echo '<div class="patientItm_phone">' . $doctor['illness_title'] . '</div>';
        echo '</div>';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">Phone Number</div>';
        echo '<div class="patientItm_phone">' . "+27" . $doctor['doctor_phone_number'] . '</div>';
        echo '</div>';

        echo '</div>';

        // URL variable sent to Appointment Edit page
        echo '<div class="patient_btn_wrap">';
        echo '<a class="' . $btn_class . '"';
        echo 'href="' . $edit_href_begin . $edit_href_id;
        echo '"><button class="secondary_btn"> Edit </button></a>';

        echo '<a class="btn btn-danger" href="./component_crud/doctor/delete_doctor.php?id=' . $doctor['doctor_id'] . '" role="button"><button class="secondary_btn_dngr">Delete</button></a>';
        echo '</div>';


        echo '</a>';

        echo '</li>';
    }
    echo '</ul>';

    ?>

</body>