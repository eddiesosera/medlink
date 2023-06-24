<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medlink: Receptionist</title>
    <style>
        <?php include 'edit_receptionist.css'
        ?>
    </style>
</head>

<body>

    <form id="edit_receptionist_wrap" action="../../component_crud/receptionist/update_receptionist.php" method="post">

        <?php

        session_start();
        echo '<img id="image" src="' . $_SESSION['profile'] . '" alt="Receptionist Image"/>';
        echo '<input type="text" value="' . $_SESSION['name'] . '" name="edit_receptionist_name"/>';
        echo '<input type="text" value="' . $_SESSION['surname'] . '" name="edit_receptionist_surname"/>';
        echo '<input type="file" name="edit_receptionist_image"/>';
        echo '<input type="text" value="' . $_SESSION['email'] . '" name="edit_receptionist_email"/>';
        echo '<input type="text" value="' . "+27" . $_SESSION['phone_number'] . '" name="edit_receptionist_number"/>';
        echo '<input type="password" id="myInput" value="' . $_SESSION['password'] . '" name="edit_receptionist_password"/>';
        echo '<input type="checkbox" onclick="myFunction()">Show Password';


        ?>

        <button name="edit_receptionist_btn" type="submit">Save Changes</button>

    </form>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>