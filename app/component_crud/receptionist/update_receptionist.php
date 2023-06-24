<?php

include "config.php";

session_start();

if (isset($_POST['edit_receptionist_btn'])) {

    $img_name = $_FILES['edit_receptionist_image']['name'];
    $tmp_img_name = $_FILES['edit_receptionist_image']['tmp_name'];
    $folder = '../../img/';

    move_uploaded_file($tmp_img_name, $folder . $img_name);

    echo 'Image Uploaded';
}

$id = $_SESSION['id'];
$rank = $_SESSION['rank_id'];
$age = $_SESSION["age"];
$gender = $_SESSION["gender"];

$name = $_POST["edit_receptionist_name"];
$surname = $_POST["edit_receptionist_surname"];
$img = $_FILES['edit_receptionist_image']['name'];
$phone_number = $_POST["edit_receptionist_phone_number"];
$email = $_POST["edit_receptionist_email"];
$password = $_POST["edit_receptionist_password"];


$_SESSION['profile'];

$sql = "UPDATE `receptionist`
SET
    `receptionist_rank_id` = '$rank',
    `receptionist_profile_url` = '$img',
    `receptionist_name` = '$name',
    `receptionist_surname` = '$surname',
    `receptionist_age` = '$age',
    `receptionist_gender` = '$gender',
    `receptionist_phone_number` = '$phone_number',
    `receptionist_email` = '$email',
    `receptionist_password` = '$password'
WHERE receptionist_id=$id";

$result = $con->query($sql);
$con->close();
header("location:" . "../../");

// $_SESSION['id'] = $row['receptionist_id'];
// $_SESSION['rank_id'] = $row['receptionist_rank_id'];
// $_SESSION['rank_title'] = $row['rank_title'];
// $_SESSION['email'] = $row['receptionist_email'];
// $_SESSION['name'] = $row['receptionist_name'];
// $_SESSION['surname'] = $row['receptionist_surname'];
// $_SESSION['profile'] = $row['receptionist_profile_url'];
// $_SESSION['age'] = $row['receptionist_age'];
// $_SESSION['gender'] = $row['receptionist_gender'];
// $_SESSION['email'] = $row['receptionist_email'];
// $_SESSION['phone_number'] = $row['receptionist_phone_number'];
// $_SESSION['password'] = $row['receptionist_password'];
// $_SESSION['status'] = 'Logged In'; edit_receptionist_image