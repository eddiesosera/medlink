<?php

include "../config.php";

$id = $_POST['id'];
$patient = $_POST["patient"];
$receptionist = $_POST["receptionist"];
$doctor = $_POST["doctor"];
$date = $_POST["date"];
$session_status = $_POST["session_status"];
$attendace = $_POST["attendence"];

$sql = "UPDATE therapysession SET receptionist_id=$receptionist, patient_id=$patient,
doctor_id=$doctor, session_date=$date, session_status=$session_status , attended=$attendace WHERE id=$id";

$result = $con->query($sql);
$con->close();
header("location: index.php");

?>