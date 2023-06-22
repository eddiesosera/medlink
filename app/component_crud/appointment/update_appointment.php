<?php

include "config.php";

$id = $_POST['id'];
$patient = $_POST["patient"];
$receptionist = $_POST["receptionist"];
$doctor = $_POST["doctor"];
$date = $_POST["date"];
$session_time = $_POST["session_time"];
$session_room = $_POST["session_room"];
$attendace = $_POST["attendence"];

$sql = "UPDATE therapysession SET receptionist_id=$receptionist, patient_id=$patient,
doctor_id=$doctor, session_date=$date, session_time=$session_time, session_room=$session_room , 
attended=$attendace 
WHERE therapySession_id=$id";


$result = $con->query($sql);
$con->close();
header("location:"."../../index.php");

?>