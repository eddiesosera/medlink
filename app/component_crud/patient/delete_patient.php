<?php

include "config.php";

$id = $_GET["id"];

$sql = "DELETE FROM patient where patient_id = $id";

$con->query($sql);
$con->close();

header("location:" . "../../patients.php");
