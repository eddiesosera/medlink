<?php

include "config.php";

$patient = $_POST["patient"];
$receptionist = $_POST["receptionist"];
$doctor = $_POST["doctor"];
$date = $_POST["date"];
$time = $_POST["time"];
$room = $_POST["room"];
$attended = $_POST["attended"];


$sql = "INSERT INTO `therapySession`(`therapySession_id`, `receptionist_id`, `patient_id`, `doctor_id`, `session_date`, `session_time`, `session_room`, `attended`) 
VALUES ('','$receptionist','$patient','$doctor','$date','$time','$room','$attended')";


$con->query($sql);
$con->close();

header('location:../../index.php?date=' . date('D-d-M'));