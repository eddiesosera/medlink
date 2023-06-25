<?php

include "config.php";


$id = $_POST["id"];
$patient = $_POST["edit_patient"];
$receptionist = $_POST["edit_receptionist"];
$doctor = $_POST["edit_doctor"];
$date = $_POST["edit_date"];
$session_time = $_POST["edit_session_time"];
$session_room = $_POST["edit_session_room"];
$attendace = $_POST["edit_attended"];

$sql = "UPDATE IGNORE therapySession SET 
receptionist_id='$receptionist', 
patient_id='$patient',
doctor_id='$doctor', 
session_date='$date', 
session_time='$session_time', 
session_room='$session_room' , 
attended='$attendace' 
WHERE therapySession_id=$id";


$result = $con->query($sql);
$con->close();
header("location:" . "../../");
