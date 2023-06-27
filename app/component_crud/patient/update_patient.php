<?php

include "config.php";

session_start();

// If submit button pressed, move selected image to the appropriate folder
if (isset($_POST['edit_receptionist_btn'])) {

    $img_name = $_FILES['edit_receptionist_image']['name'];
    $tmp_img_name = $_FILES['edit_receptionist_image']['tmp_name'];
    $folder = '../../img/receptionists/';

    move_uploaded_file($tmp_img_name, $folder . $img_name);
}

// IMAGE VALIDATION
// Validating if image is selected
if ($_FILES['edit_patient_image']['name'] !== '') {
    $img = $_FILES['edit_patient_image']['name'];
    echo 'Image Successfully Uploaded';
} else {
    $sql_patient = "select *
        from patient ptnt";

    $result_img = $con->query($sql_patient);

    if ($patient = $result_img->fetch_assoc()) {

        // Set image to existing/current image if no new upload
        if ($_SESSION['id'] == $patient['patient_id']) {
            $img = $patient['patient_profile_url'];
        }
    }
}


$id = $_GET['pat_id'];
$medicalAid = $_POST['edit_patient_medicalAid_id'];
$illness = $_POST["edit_patient_illness"];

$name = $_POST["edit_patient_name"];
$surname = $_POST["edit_patient_surname"];

$age = $_POST["edit_patient_age"];
$gender = $_POST["edit_patient_gender"];

$phone_number = $_POST["edit_patient_phone_number"];
$email = $_POST["edit_patient_email"];
$gov_id = $_POST["edit_patient_gov_id"];

$sql = "UPDATE
    `patient`
   SET
    `patient_medicalAid_id` = '$medicalAid',
    `patient_illnesType_id` = '$illness',
    `patient_profile_url` = '$img',
    `patient_name` = '$name',
    `patient_surname` = '$surname',
    `patient_age` = '$age',
    `patient_gender` = '$gender',
    `patient_gov_id` = '$gov_id',
    `patient_email` = '$email',
    `patient_phone_number` = '$phone_number'
WHERE
`patient_id` = $id";

$result = $con->query($sql);
$con->close();
header('location:' . '../../patients.php?selected_id=' . $id);