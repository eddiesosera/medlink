<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Patient</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    Add New Patient


    <form action="../../component_crud/patient/create_patient.php" method="POST" enctype="multipart/form-data">


        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="surname" placeholder="Surname" />
        <input type="number" name="id_no" placeholder="ID Number" />
        <input type="number" name="age" placeholder="Age" />

        <select required name="gender">
            <option value="F">Gender</option>
            <option value="Female">F</option>
            <option value="Male">M</option>
        </select>

        <?php

        include 'config.php';

        // Illness type from DB dropdown
        $sql_illness = "select *
        from illness_types 
        ORDER BY `illness_id` ASC";

        $result_illness = $con->query($sql_illness);

        echo '<select required name="illness" key="">';
        echo '<option value="">Reason for Treatment:</option>';
        while ($illn = $result_illness->fetch_assoc()) {
            echo '<option value="' . $illn['illness_id'] . '">' . ucfirst($illn['illness_title']) . '</option>';
        }
        echo "</select>";


        // Medical Aid from DB dropdown
        $sql_medAid = "select *
        from medical_aid 
        ORDER BY `medicalAid_id` ASC";

        $result_medAid = $con->query($sql_medAid);

        echo '<select required name="medical_aid" key="">';
        echo '<option value="">Medical Aid:</option>';
        while ($medAid = $result_medAid->fetch_assoc()) {
            echo '<option value="' . $medAid['medicalAid_id'] . '">' . ucfirst($medAid['organisation_title']) . '</option>';
        }
        echo "</select>";


        echo '<input type="number" name="phone_number" placeholder="Phone number"/>';
        echo '<input type="email" name="email" placeholder="Email"/>';


        echo '<input type="file" name="image" placeholder="Upload"/>';

        $con->close();

        ?>

        <button type="submit">Add Patient</button>
        <a href="../index.php"><button id="cancelBtn_edit-appointment">Cancel</button></a>';


    </form>


</body>

</html>