<?php

include "config.php";

session_start();

$id = $_GET["id"];

$sql = "DELETE FROM receptionist where receptionist_id = $id";

$con->query($sql);
$con->close();

header("location:" . "../../component_ui/receptionist/manage_receptionist.php");
