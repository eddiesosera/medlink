<?php

session_start();
include "config.php";

if (isset($_SESSION['id']) == false && isset($_SESSION['email']) == false && isset($_SESSION['name']) == false) {
    header("location: login/login.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Doctor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        <?php include 'doctors.css'
        ?>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>

</head>

<body>

    <div class="new_patient_wrap">

        <div class="new_patient_head">
            New Doctor
        </div>

        <form class="new_patient_form_wrap" action="../../component_crud/doctor/create_doctor.php" method="POST" enctype="multipart/form-data">

            <input type="file" name="image" placeholder="Upload" />

            <div class="form_group_section">
                <input type="text" name="name" placeholder="Name" />
                <input type="text" name="surname" placeholder="Surname" />
            </div>

            <?php

            // Medical Aid + Conditions from DB
            include 'config.php';

            // Illness type from DB dropdown
            $sql_illness = "select *
            from illness_types 
            ORDER BY `illness_id` ASC";

            $result_illness = $con->query($sql_illness);

            echo '<select class="new_patient_illness dropdown" required name="illness" key="">';
            echo '<option value="">Speciality</option>';
            while ($illn = $result_illness->fetch_assoc()) {
                echo '<option value="' . $illn['illness_id'] . '">' . ucfirst($illn['illness_title']) . '</option>';
            }
            echo "</select>";

            $con->close();

            ?>

            <div class="form_group_section">
                <input type="number" name="phone_number" placeholder="Phone number" />
                <input type="email" name="email" placeholder="Email" />
            </div>

            <input type="number" name="id_no" placeholder="ID Number" />

            <div class="form_group_section">
                <input class="dropdown" type="date" name="age" placeholder="Age" />
                <select class="dropdown" required name="gender">
                    <option value="">Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>

            <button class="primary_btn" name="new_doctor_btn" type="submit">Add Doctor</button>


        </form>

    </div>


</body>

</html>