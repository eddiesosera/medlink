<?php

include "config.php";

session_start();

$id = $_GET['doc_id'];

// If submit button pressed, move selected image to the appropriate folder
if (isset($_POST['edit_doctor_btn'])) {

    $img_name = $_FILES['edit_doctor_image']['name'];
    $tmp_img_name = $_FILES['edit_doctor_image']['tmp_name'];
    $folder = '../../img/doctors/';

    move_uploaded_file($tmp_img_name, $folder . $img_name);
}

// IMAGE VALIDATION
// Validating if image is selected
if ($_FILES['edit_doctor_image']['name'] !== '') {
    $img = $_FILES['edit_doctor_image']['name'];
    echo 'Image Successfully Uploaded';
} else {
    $sql_patient = "select *
        from doctors
        where doctors.doctor_id=$id";

    $result_img = $con->query($sql_patient);

    if ($doctor = $result_img->fetch_assoc()) {

        // Set image to existing/current image if no new upload
        if ($id == $doctor['doctor_id']) {
            $img = $doctor['doctor_profile_url'];
        }
    }
}

$speciality = $_POST["edit_doctor_speciality"];

$name = $_POST["edit_doctor_name"];
$surname = $_POST["edit_doctor_surname"];

$age = $_POST["edit_doctor_age"];
$gender = $_POST["edit_doctor_gender"];

$phone_number = $_POST["edit_doctor_phone_number"];
$email = $_POST["edit_doctor_email"];
$gov_id = $_POST["edit_doctor_gov_id"];

$sql = "UPDATE
    `doctors`
   SET
    `doctor_speciality_id` = '$speciality',
    `doctor_profile_url` = '$img',
    `doctor_name` = '$name',
    `doctor_surname` = '$surname',
    `doctor_age` = '$age',
    `doctor_gender` = '$gender',
    `doctor_gov_id` = '$gov_id',
    `doctor_email` = '$email',
    `doctor_phone_number` = '$phone_number'

WHERE
`doctor_id` = $id";

$result = $con->query($sql);
$con->close();
header('location:' . '../../doctors.php?selected_id=' . $id);