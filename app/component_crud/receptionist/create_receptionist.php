<?php

include "config.php";

// If submit button pressed, move selected image to the appropriate folder
if (isset($_POST['new_receptionist_btn'])) {

    $img_name = $_FILES['new_receptionist_image']['name'];
    $tmp_img_name = $_FILES['new_receptionist_image']['tmp_name'];
    $folder = '../../img/receptionists/';

    move_uploaded_file($tmp_img_name, $folder . $img_name);
}

// VALIDATION
// If the email and password has ANY value process the values as follows:
if (isset($_POST['new_receptionist_email']) && isset($_POST['new_receptionist_password'])) {


    // Create a session refence (id) when logged in
    session_start();


    // A function that proccess the characters of the input value.
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['new_receptionist_email']);
    $password = validate($_POST['new_receptionist_password']);


    // If the input value (on login page) is empty create a variable on the URL that hints potential problems.
    if (empty($email)) {
        header("location: ../../component_ui/receptionist/new_receptionist.php?error=Email adress is required");
        exit();
    } else if (empty($password)) {
        header("location: ../../component_ui/receptionist/new_receptionist.php?error=Password is required");
        exit();
    }
    // Extracting existing accounts
    $sql_receptionist = "select *
        from receptionist rcptn, receptionist_rank rcptn_rnk
        where rcptn.receptionist_rank_id=rcptn_rnk.rank_id";

    $result = $con->query($sql_receptionist);
    $receptionist = $result->fetch_assoc();

    for ($r = 0; $r <= (count($receptionist) + 1); $r++) {

        // If email exists, send error alert. Try another one
        // while ($receptionist) {
        //     if ($receptionist['receptionist_email'] === $_POST['new_receptionist_email']) {
        //         header("location: ../../component_ui/receptionist/new_receptionist.php?error=Email is already used, Try another.");
        //         exit();
        //     }
        //     // If email exists, send error alert. Try another one
        //     if ($receptionist['receptionist_phone_number'] === $_POST["new_receptionist_phone_number"]) {
        //         header("location: ../../component_ui/receptionist/new_receptionist.php?error=Phone number is already used, Try another.");
        //         exit();
        //     }
        // }

        echo "$r";

        // If the form passes validation, submit details of new receptionist
        if ($r === (count($receptionist) + 1)) {
            $img = $_FILES['new_receptionist_image']['name'];
            $rank = $_POST['new_receptionist_rank_id'];
            $age = $_POST["new_receptionist_age"];
            $gender = $_POST["new_receptionist_gender"];

            $name = $_POST["new_receptionist_name"];
            $surname = $_POST["new_receptionist_surname"];
            $phone_number = $_POST["new_receptionist_phone_number"];
            $email = $_POST["new_receptionist_email"];
            $password = $_POST["new_receptionist_password"];

            $sql = "INSERT INTO receptionist(
                `receptionist_id`,
                `receptionist_rank_id`,
                `receptionist_profile_url`,
                `receptionist_name`,
                `receptionist_surname`,
                `receptionist_age`,
                `receptionist_gender`,
                `receptionist_phone_number`,
                `receptionist_email`,
                `receptionist_password`) VALUES('','$rank','$img','$name','$surname','$age','$gender','$phone_number','$email','$password')";

            $con->query($sql);
            $con->close();

            header("location:" . "../../component_ui/receptionist/manage_receptionist.php");
        }
    }
}