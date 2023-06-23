<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        <?php include 'login.css';
        ?>
    </style>

</head>

<body>

    <form action="login_action.php" method="post">

        Login

        <?php

        // Display error details about login attempt
        if (isset($_GET['error'])) {
            echo '<div class="login_error_display">' . $_GET['error'] . '</div>';
        }
        ?>

        <input type="text" name="receptionist_email_login" placeholder="Email adress" />
        <input type="password" name="receptionist_password_login" placeholder="password" />

        <button type="submit">Login</button>
    </form>

</body>

</html>