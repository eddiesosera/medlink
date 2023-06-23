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
select *, medAid.organisation_title
from patient ptnt, medical_aid medAid
where ptnt.patient_id=ptnt.patient_id and ptnt.patient_medicalAid_id=medAid.medicalAid_id";

    $result = mysqli_query($con, $query);

    echo '<ul class="patients_body_wrap_r_list_patientsWrap">';
    while ($patient = mysqli_fetch_assoc($result)) {
        echo '<li class="patients_body_wrap_r_list_patientItm" key="' . $patient['patient_id'] . '">';

        echo '<img class="patientItm_img" src="" alt="Patient profile"/>';

        echo '<div class="patientItm_deetsWrap">';

        echo '<div class="patientItm_col">';
        echo '<div class="patientItm_namesWrap">';
        echo '<div class="patientItm_names">' . $patient['patient_name'] . " " . $patient['patient_surname'] . '</div>';
        echo '</div>';
        echo '<div class="patientItm_contactWrap">';
        echo '<div class="patientItm_contact">' . $patient['patient_phone_number']  . '</div>';
        echo '</div>';
        echo '</div>';

        echo '<div class="patientItm_col">';
        echo '<div class="patientItm_namesWrap">';
        echo '<div class="patientItm_names">' . $patient['patient_gov_id'] . '</div>';
        echo '</div>';
        echo '<div class="patientItm_contactWrap">';
        echo '<div class="patientItm_contact">' . $patient['organisation_title']  . '</div>';
        echo '</div>';
        echo '</div>';

        echo '</div>';


        // URL variable declaration sent to edit page
        $btn_class = "patient_edit_btn";
        $edit_href_begin = "../app/component_ui/appointments/edit_appointment.php";
        $edit_href_id = "?id=" . urlencode($patient['patient_id']);
        $edit_href_rec = "&receptionist=" . urldecode($patient['patient_name']);;

        // URL variable sent to Appointment Edit page
        echo '<a class="' . $btn_class . '"';
        echo 'href="' . $edit_href_begin . $edit_href_id . $edit_href_rec;
        echo '"> Edit </a>';

        echo '<a class="btn btn-danger" href="./component_crud/patient/delete_patient.php?id=' . $patient['patient_id'] . '" role="button">Delete</a>';


        echo '</li>';
    }
    echo '</ul>';

    ?>

</body>