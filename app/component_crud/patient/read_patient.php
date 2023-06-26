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
    select patient.*, medical_aid.*, illness_types.*
    from patient , medical_aid , illness_types
    where patient.patient_medicalAid_id=medical_aid.medicalAid_id and patient.patient_illnesType_id=illness_types.illness_id";



    $result = mysqli_query($con, $query);

    echo '<ul class="patients_body_wrap_r_list_patientsWrap">';
    while ($patient = mysqli_fetch_assoc($result)) {

        // URL variable declaration sent to edit page
        $btn_class = "patient_edit_btn";
        $edit_href_begin = "../app/component_ui/appointments/edit_appointment.php";
        $edit_href_id = "?id=" . urlencode($patient['patient_id']);
        $edit_href_rec = "&receptionist=" . urldecode($patient['patient_name']);

        echo '<li class="patients_body_wrap_r_list_patientItm" key="' . $patient['patient_id'] . '">';

        echo '<a  class="patients_patientItm_link"
        href=patients.php?selected_id=' . $patient['patient_id'] . ' >';

        echo '<img class="patientItm_img" src="img/patients/' . $patient['patient_profile_url'] . '" alt="Patient profile"/>';

        echo '<div class="patientItm_deetsWrap">';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">Full Names</div>';
        echo '<div class="patientItm_names">' . $patient['patient_name'] . " " . $patient['patient_surname'] . '</div>';
        echo '</div>';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">ID Number</div>';
        echo '<div class="patientItm_phone">' . $patient['patient_gov_id'] . '</div>';
        echo '</div>';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">Condition</div>';
        echo '<div class="patientItm_phone">' . $patient['illness_title'] . '</div>';
        echo '</div>';

        // echo '<div class="patientItm_col">';
        echo '<div class="patientItm_detailWrap">';
        echo '<div class="Patient_col_label">Medical Aid</div>';
        echo '<div class="patientItm_phone">' . $patient['medicalAid_organization'] . '</div>';
        echo '</div>';

        // echo '<div class="patientItm_col">';
        // echo '<div class="patientItm_detailWrap">';
        // echo '<div class="Patient_col_label">Phone Number</div>';
        // echo '<div class="patientItm_phone">' . $patient['patient_phone_number'] . '</div>';
        // echo '</div>';

        echo '</div>';

        // URL variable sent to Appointment Edit page
        echo '<div class="patient_btn_wrap">';
        echo '<a class="' . $btn_class . '"';
        echo 'href="' . $edit_href_begin . $edit_href_id . $edit_href_rec;
        echo '"><button class="secondary_btn"> Edit </button></a>';

        echo '<a class="btn btn-danger" href="./component_crud/patient/delete_patient.php?id=' . $patient['patient_id'] . '" role="button"><button class="secondary_btn_dngr">Delete</button></a>';
        echo '</div>';


        echo '</a>';

        echo '</li>';
    }
    echo '</ul>';

    ?>

</body>