<?php

include "config.php";

$id = $_GET["id"];

$sql = "DELETE FROM doctors where doctor_id = $id";

$con->query($sql);
$con->close();

header("location:" . "../../doctors.php");