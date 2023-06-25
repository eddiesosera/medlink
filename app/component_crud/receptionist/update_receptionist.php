<?php

include "config.php";

session_start();

// If submit button pressed, move selected image to the appropriate folder
if (isset($_POST['edit_receptionist_btn'])) {

    $img_name = $_FILES['edit_receptionist_image']['name'];
    $tmp_img_name = $_FILES['edit_receptionist_image']['tmp_name'];
    $folder = '../../img/receptionists/';

    move_uploaded_file($tmp_img_name, $folder . $img_name);
}

// IMAGE VALIDATION
// Validating if image is selected
if ($_FILES['edit_receptionist_image']['name'] !== '') {
    $img = $_FILES['edit_receptionist_image']['name'];
    echo 'Image Successfully Uploaded';
} else {
    $sql_receptionist = "select *
        from receptionist rcptn, receptionist_rank rcptn_rnk";

    $result_img = $con->query($sql_receptionist);

    if ($receptionist = $result_img->fetch_assoc()) {

        // Set image to existing/current image if no new upload
        if ($_SESSION['id'] == $receptionist['receptionist_id']) {
            $img = $receptionist['receptionist_profile_url'];
        }
    }
}

$id = $_SESSION['id'];
$rank = $_SESSION['rank_id'];
$age = $_SESSION["age"];
$gender = $_SESSION["gender"];

$name = $_POST["edit_receptionist_name"];
$surname = $_POST["edit_receptionist_surname"];
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