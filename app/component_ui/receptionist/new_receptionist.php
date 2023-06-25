<?php

session_start();

if (isset($_GET['error'])) {
    echo '<div class="login_error_display">' . $_GET['error'] . '</div>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Receptionist</title>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    <style>
    <?php include './receptionist.css';
    ?>
    </style>

</head>

<body>



    <form id="edit_receptionist_wrap" action="../../component_crud/receptionist/create_receptionist.php" method="post"
        enctype="multipart/form-data">

        <h1>Add New Receptionist</h1>

        <div class="new_receptionist_inforWrap">

            <div class="new_receptionist_profile_wrap">
                <img id="new_receptionist_image" style="display:none;" alt="Receptionist Image" />
                <input onchange="readURL(event)" id="new_UploadImg" type="file" name="new_receptionist_image" />
                <!--   -->
            </div>
            <select required name="new_receptionist_rank_id">
                <option selected value="2">Rank</option>
                <option value="1">Head Receptionist</option>
                <option value="2">Regular Receptionist</option>
            </select>

            <div class="new_receptionist_name_wrap">
                <input type="text" required placeholder="Name" name="new_receptionist_name" />
                <input type="text" required placeholder="Surname" name="new_receptionist_surname" />
            </div>

            <div class="new_receptionist_phone_wrap">
                <input type="text" required placeholder="Email" name="new_receptionist_email" />
                <input type="text" required placeholder="Phone Number" name="new_receptionist_phone_number" />
            </div>

            <div class="new_receptionist_name_wrap">

                <div>Date of Birth</div>
                <div class="new_receptionist_name_dob_gndr">
                    <input type="date" id="new_receptionist_age" required name="new_receptionist_age" />

                    <select required id="new_receptionist_gender" name="new_receptionist_gender">
                        <option value="F">Gender</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
            </div>

            <input type="password" placeholder="Password" id="myInput" name="new_receptionist_password" />



            <button class="new_receptionist_btn" name="new_receptionist_btn" type="submit">Add Receptionist</button>
        </div>
    </form>

    <script>
    function readURL(event) {

        var image = document.getElementById('new_receptionist_image');
        image.src = URL.createObjectURL(event.target.files[0]);
        image.style.display = "block";

        console.log('URL =: ' + URL.createObjectURL(event.target.files[0]))

    }
    </script>

</body>

</html>