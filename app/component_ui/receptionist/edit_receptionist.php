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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>

</head>

<body>

    <form id="edit_receptionist_wrap" action="../../component_crud/receptionist/update_receptionist.php" method="post"
        enctype="multipart/form-data">

        <?php

        session_start();

        include "config.php";

        $sql_receptionist = "select *
        from receptionist rcptn, receptionist_rank rcptn_rnk
        where rcptn.receptionist_rank_id=rcptn_rnk.rank_id";

        $result = $con->query($sql_receptionist);

        while ($receptionist = $result->fetch_assoc()) {
            if ($_SESSION['id'] == $receptionist['receptionist_id']) {

                echo '<img style="display:none;" id="image" src="' . $receptionist['receptionist_profile_url'] . '" alt="Receptionist Image"/>';
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
        var dispImg = document.getElementById("image");
        if (editOpen.style.display === "none") {
            editOpen.style.display = "block";
            dispImg.style.display = "block";
        } else {
            editOpen.style.display = "none";
            dispImg.style.display = "none";
        }
    }
    </script>

</body>

</html>