<?php

include "config.php";

// If submit button pressed, move selected image to the appropriate folder
if (isset($_POST['new_patient_btn'])) {

    $img_name = $_FILES['image']['name'];
    $tmp_img_name = $_FILES['image']['tmp_name'];
    $folder = '../../img/doctors/';

    move_uploaded_file($tmp_img_name, $folder . $img_name);
}

$name = $_POST["name"];
$img = $_FILES['image']['name'];
$surname = $_POST["surname"];
$illness = $_POST["illness"];
$id_no = $_POST["id_no"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phone_no = $_POST["phone_number"];


$sql = "INSERT IGNORE INTO 
`doctors`(
    `doctor_id`,  
`doctor_speciality_id`, 
`doctor_profile_url`, 
`doctor_name`, 
`doctor_surname`, 
`doctor_age`, 
`doctor_gender`, 
`doctor_gov_id`, 
`doctor_email`, 
`doctor_phone_number`) 
VALUES ('','$illness','$img','$name','$surname','$age','$gender','$id_no','$email','$phone_no')";


$con->query($sql);
$con->close();

header("location:" . "../../doctors.php");