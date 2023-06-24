<?php

include "config.php";

// If submit button pressed, move selected image to the appropriate folder
if (isset($_POST['new_receptionist_btn'])) {

    $img_name = $_FILES['new_receptionist_image']['name'];
    $tmp_img_name = $_FILES['new_receptionist_image']['tmp_name'];
    $folder = '../../img/';

    move_uploaded_file($tmp_img_name, $folder . $img_name);
}

$img = $_FILES['new_receptionist_image']['name'];
$rank = $_POST['new_receptionist_rank_id'];
$age = $_POST["new_receptionist_age"];
$gender = $_POST["new_receptionist_gender"];

$name = $_POST["new_receptionist_name"];
$surname = $_POST["new_receptionist_surname"];
$phone_number = $_POST["new_receptionist_phone_number"];
$email = $_POST["new_receptionist_email"];
$password = $_POST["new_receptionist_password"];

$sql = "
INSERT INTO receptionist(
    `receptionist_id`,
    `receptionist_rank_id`,
    `receptionist_profile_url`,
    `receptionist_name`,
    `receptionist_surname`,
    `receptionist_age`,
    `receptionist_gender`,
    `receptionist_phone_number`,
    `receptionist_email`,
    `receptionist_password`
)
VALUES(
    '',
    '$rank',
    '$img',
    '$name',
    '$surname',
    '$age',
    '$gender',
    '$phone_number',
    '$email',
    '$password'
)";

$con->query($sql);
$con->close();

header("location:" . "../../component_ui/receptionist/manage_receptionist.php");
