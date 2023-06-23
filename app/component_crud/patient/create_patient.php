<?php

include "config.php";

$name = $_POST["name"];
$surname = $_POST["surname"];
$medicalAid = $_POST["medical_aid"];
$illness = $_POST["illness"];
$profile = $_POST["image"];
$id_no = $_POST["id_no"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phone_no = $_POST["phone_number"];


$sql = "INSERT IGNORE INTO `patient`(`patient_id`, `patient_medicalAid_id`, `patient_illnesType_id`, `patient_profile_url`, `patient_name`, `patient_surname`, 
`patient_age`, `patient_gender`, `patient_gov_id`, `patient_email`, `patient_phone_number`) 
VALUES ('','$medicalAid','$illness','$profile','$name','$surname','$age','$gender','$id_no','$email','$phone_no')";


$con->query($sql);
$con->close();

header("location:" . "../../patients.php");
