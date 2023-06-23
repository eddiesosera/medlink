<?php

include 'config.php';


// If the email and password has ANY value process the values as follows:
if (isset($_POST['receptionist_email_login']) && isset($_POST['receptionist_password_login'])) {


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

    $email = validate($_POST['receptionist_email_login']);
    $password = validate($_POST['receptionist_password_login']);


    // If the input value (on login page) is empty create a variable on the URL that hints potential problems.
    if (empty($email)) {
        header("location: login.php?error=Email adress is required");
        exit();
    } else if (empty($password)) {
        header("location: login.php?error=Password is required");
        exit();
    }

    // If the input value is not empty execute the following:
    else {
        $sql =
            "SELECT rec.*, rnk.rank_title
            FROM receptionist rec, receptionist_rank rnk
            WHERE receptionist_email='$email' and receptionist_password='$password' and rec.receptionist_rank_id=rnk.rank_id";

        $result = mysqli_query($con, $sql);


        // If the database returns data (1) execute create session keys and redirect to the home page.
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['receptionist_email'] === $email && $row['receptionist_password'] === $password) {
                $_SESSION['id'] = $row['receptionist_id'];
                $_SESSION['rank_id'] = $row['receptionist_rank_id'];
                $_SESSION['rank_title'] = $row['rank_title'];
                $_SESSION['email'] = $row['receptionist_email'];
                $_SESSION['name'] = $row['receptionist_name'];
                $_SESSION['surname'] = $row['receptionist_name'];
                $_SESSION['profile'] = $row['receptionist_profile_url'];
                $_SESSION['age'] = $row['receptionist_age'];
                $_SESSION['gender'] = $row['receptionist_gender'];
                $_SESSION['email'] = $row['receptionist_email'];
                $_SESSION['phone_number'] = $row['receptionist_phone_number'];
                $_SESSION['status'] = 'Logged In';
                header("location: ../");
                exit();
            } else {
                header("location: login.php?error=Incorrect username or password");
                exit();
            }
        }

        // If the database does not return anything then your credentials do match those in thr DB, therefore try again
        else {
            header("location: login.php?error=Incorrect username or password");
            exit();
        }
    }
} else {

    // If the email and password doesnt have ANY value go back to the login page.
    header("location: login.php");
    exit();
}
