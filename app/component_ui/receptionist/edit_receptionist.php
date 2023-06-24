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

    <form id="edit_receptionist_wrap" action="../../component_crud/receptionist/update_receptionist.php" method="post" enctype="multipart/form-data">

        <?php

        session_start();

        include "config.php";

        $sql_receptionist = "select *
        from receptionist rcptn, receptionist_rank rcptn_rnk
        where rcptn.receptionist_rank_id=rcptn_rnk.rank_id";

        $result = $con->query($sql_receptionist);

        while ($receptionist = $result->fetch_assoc()) {
            if ($_SESSION['id'] == $receptionist['receptionist_id']) {

                echo '<img id="image" src="' . $receptionist['receptionist_profile_url'] . '" alt="Receptionist Image"/>';
                echo '<div style="background:yellow;" id="imgEdit" onClick="openImgUpload()">Edit Image</div>';
                echo '<input type="text" value="' . $receptionist['receptionist_name'] . '" name="edit_receptionist_name"/>';
                echo '<input type="text" value="' . $receptionist['receptionist_surname'] . '" name="edit_receptionist_surname"/>';
                echo '<input style="display:none;" id="edit_UploadImg" type="file" value="' . $receptionist['receptionist_profile_url'] . '" name="edit_receptionist_image"/>';
                echo '<input type="text" value="' . $_SESSION['email'] . '" name="edit_receptionist_email"/>';
                echo '<input type="text" value="' . "+27" . $receptionist['receptionist_phone_number'] . '" name="edit_receptionist_phone_number"/>';
                echo '<input type="password" id="myInput" value="' . $receptionist['receptionist_password'] . '" name="edit_receptionist_password"/>';
                echo '<input type="checkbox" onclick="myFunction()">Show Password';
            }
        }

        $con->close();

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

        function openImgUpload() {
            var editOpen = document.getElementById("edit_UploadImg");
            if (editOpen.style.display === "none") {
                editOpen.style.display = "block"
            } else {
                editOpen.style.display = "none"
            }
        }
    </script>

</body>

</html>