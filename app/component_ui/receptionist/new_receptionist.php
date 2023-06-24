<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Receptionist</title>
</head>

<body>

    <form id="edit_receptionist_wrap" action="../../component_crud/receptionist/create_receptionist.php" method="post" enctype="multipart/form-data">

        <h1>Add New Receptionist</h1>

        <?php

        session_start();

        echo '<input onchange="readURL(event)" id="new_UploadImg" type="file" name="new_receptionist_image"/>';
        echo '<img id="image" style="height:200px" alt="Receptionist Image"/>';

        echo '<select required name="new_receptionist_rank_id">';
        echo '<option selected value="2">Rank</option>';
        echo '<option value="1">Head Receptionist</option>';
        echo ' <option value="2">Regular Receptionist</option>';
        echo '</select>';

        echo '<input type="text" required placeholder="Name" name="new_receptionist_name"/>';
        echo '<input type="text" required placeholder="Surname" name="new_receptionist_surname"/>';
        echo '<input type="text" required placeholder="Email" name="new_receptionist_email"/>';
        echo '<input type="text" required placeholder="Phone Number" name="new_receptionist_phone_number"/>';
        echo '<div>Date of Birth</div>';
        echo '<input type="date" required name="new_receptionist_age"/>';

        echo '<select required name="new_receptionist_gender">';
        echo '<option value="F">Gender</option>';
        echo '<option value="Female">Female</option>';
        echo ' <option value="Male">Male</option>';
        echo '</select>';

        echo '<input type="password" required placeholder="Password" id="myInput" name="new_receptionist_password"/>';

        ?>

        <button name="new_receptionist_btn" type="submit">Add Receptionist</button>

    </form>

    <script>
        function readURL(event) {

            alert('uploaded')

            var image = document.getElementById('image');
            image.src = URL.createObjectURL(event.target.files[0]);

            console.log('URL =: ' + URL.createObjectURL(event.target.files[0]))

        }
    </script>

</body>

</html>