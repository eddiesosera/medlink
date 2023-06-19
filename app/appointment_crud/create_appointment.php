<?php 

include "../config.php";
$patient = $_POST["patient"];
$receptionist = $_POST["receptionist"];
$doctor = $_POST["doctor"];
$date = $_POST["date"];
$session_status = $_POST["session_status"];
$attendace = $_POST["attendence"];


$sql = "INSERT INTO therapysession(therapySession_id, receptionist_id, patient_id, doctor_id, session_date, session_status, attended) VALUES ('',$receptionist,$patient,$doctor,$date,$session_status,$attendace)";

$con->query($sql);
$con->close;

header("location: ../index.php");

?>