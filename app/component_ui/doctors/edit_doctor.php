<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
    <?php include 'patients.css'
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
            Edit Doctor
        </div>

        <?php
        echo '<form class="new_patient_form_wrap" action="../../component_crud/patient/update_patient.php?pat_id=' . $_GET['pat_id'] . '" method="POST"';
        echo 'enctype="multipart/form-data">';
        ?>

        <!-- Name and Surname -->
        <?php

        include 'config.php';

        $sql_patient_def = "select *
            from patient";

        $result_ptnt = $con->query($sql_patient_def);


        echo '<input type="file" name="edit_patient_image" placeholder="Upload" />';

        while ($ptnt =  $result_ptnt->fetch_assoc()) {
            if ($_GET['pat_id'] === $ptnt['patient_id']) {
                echo '<div class="form_group_section">';
                echo '<input type="text" value="' . $ptnt['patient_name'] . '" name="edit_patient_name" placeholder="Name" />';
                echo '<input type="text" value="' . $ptnt['patient_surname'] . '" name="edit_patient_surname" placeholder="Surname" />';
                echo '</div>';
            }
        }

        // Medical Aid + Conditions from DB
        // Illness type from DB dropdown
        $patient = $_GET['pat_id'];
        $sql_illness = "select *
            from illness_types, patient 
            where patient.patient_id=$patient";

        $result_illness = $con->query($sql_illness);

        echo '<div class="form_group_section">';
        echo '<select class="edit_patient_illness dropdown" required name="edit_patient_illness" key="">';
        echo '<option value="">Medical Condition</option>';
        while ($illn = $result_illness->fetch_assoc()) {

            echo '<option ';
            if (isset($_GET['ill_id'])) {
                if ($illn['patient_illnesType_id'] == $illn['illness_id']) {
                    echo 'selected';
                }
            }
            echo ' value="' . $illn['illness_id'] . '" >' . ucfirst($illn['illness_title']) . '</option>';
        }
        echo "</select>";


        // Medical Aid from DB dropdown
        $sql_medAid = "select *
            from medical_aid, patient 
            where patient.patient_id=$patient";

        $result_medAid = $con->query($sql_medAid);

        echo '<select class="new_patient_medicalAid dropdown" required name="edit_patient_medicalAid_id" key="">';
        echo '<option value="">Medical Aid</option>';
        while ($medAid = $result_medAid->fetch_assoc()) {
            echo '<option';
            if ($medAid['patient_medicalAid_id'] == $medAid['medicalAid_id']) {
                echo ' selected';
            }
            echo ' value="' . $medAid['medicalAid_id'] . '">' . ucfirst($medAid['medicalAid_organization']) . '</option>';
        }
        echo '</select>';
        echo '</div>';

        ?>

        <div class="form_group_section">

            <?php

            // INPUT EMAIL PHONE

            $sql_input = "select *
                from patient 
                where patient.patient_id=$patient";

            $result_fill = $con->query($sql_input);
            while ($fill_input = $result_fill->fetch_assoc()) {
                echo '<input value="' . $fill_input['patient_phone_number'] .  '" type="number" name="edit_patient_phone_number" placeholder="Phone number" />';
                echo '<input value="' . $fill_input['patient_email'] .  '" type="email" name="edit_patient_email" placeholder="Email" />';


                echo '</div>';

                echo '<input value="' . $fill_input['patient_gov_id'] .  '" type="number" name="edit_patient_gov_id" placeholder="ID Number" />';
            }

            ?>


            <!-- INPUT -->

            <div class="form_group_section">
                <?php

                $patient2 = $_GET['pat_id'];
                $gender = array("Female", "Male");

                $sql_input2 = "select *
                    from patient 
                    where patient.patient_id=$patient2";

                $result_fill2 = $con->query($sql_input2);

                while ($fill_input2 = $result_fill2->fetch_assoc()) {
                    echo '<input readonly value="' . $fill_input2['patient_age'] .  '" class="dropdown" type="date" name="edit_patient_age" placeholder="Age" />';

                    echo '<select class="dropdown" required name="edit_patient_gender">';
                    echo '<option value="">Gender</option>';

                    for ($x = 0; $x < count($gender); $x++) {
                        if ($gender[$x] == $fill_input2['patient_gender']) {
                            echo '<option selected value="' . $gender[$x] . '">' . $gender[$x] . '</option>';
                        } else {
                            echo '<option value="' . $gender[$x] . '">' . $gender[$x] . '</option>';
                        }
                    }
                    echo '</select>';
                }

                $con->close();

                ?>
            </div>

            <button class="primary_btn" name="new_patient_btn" type="submit">Save Changes</button>
            <!-- <a href="../index.php"><button id="cancelBtn_edit-appointment">Cancel</button></a> -->

            </form>

        </div>


</body>

</html>