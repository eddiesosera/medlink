<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
    <?php include 'appointments.css'
    ?>
    </style>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>

</head>

<body>

    <div>


        <div class='newAppointment_wrap'>

            <h1 class="form_head">New Appointment</h1>

            <form class="form_wrap" action="../../component_crud/appointment/create_appointment.php" method="POST">

                <!-- // Receptionist logged in -->
                <input type="text" class="receptionist" readonly value="1" name="receptionist" />

                <?php

                include 'config.php';
                // Patient drop down with selected appoinment on select
                $sql_patient = "select *
            from patient ptnt
            where ptnt.patient_id";

                $result = $con->query($sql_patient);

                echo '<select required name="patient" key="">';
                echo '<option value="">Select Patient</option>';
                while ($patient = $result->fetch_assoc()) {
                    echo '<option value="' . $patient['patient_id'] . '">' . "#" . $patient['patient_id'] . " - " . $patient['patient_name'] . " " . $patient['patient_surname'] . '</option>';
                }
                echo "</select>";


                // Patient drop down with selected appoinment on select
                $sql_doctor = "select *
            from doctors dctr
            where dctr.doctor_id";

                $result = $con->query($sql_doctor);

                echo '<select required name="doctor" key="">';
                echo '<option value="">Select Doctor</option>';
                while ($doctor = $result->fetch_assoc()) {
                    echo '<option value="' . $doctor['doctor_id'] . '">' . "Dr. " . $doctor['doctor_name'] . " " . $doctor['doctor_surname'] . '</option>';
                }
                echo "</select>";


                echo '<div class="form_group_Section">';
                // Date picker with init date
                echo '<input type="date" value="Today" name="date"  id="appointment_date"/>';

                // Time slots

                $therapy_time_slots = array("09:00", "10:05", "11:05", "13:00", "14:05", "15:05");
                echo '<select name="time">';


                for ($t = 0; $t <= (count($therapy_time_slots) - 1); $t++) {
                    echo '<option value"' . $therapy_time_slots[$t] . '" >' . $therapy_time_slots[$t] . '</option>';
                };

                echo '</select>';
                echo '</div>';


                // Session Room

                $therapy_rooms = array("A1", "A2", "B1", "B2", "C1", "C2");
                echo '<select name="room">';

                for ($r = 0; $r <= (count($therapy_rooms) - 1); $r++) {
                    echo '<option value"' . $therapy_rooms[$r] . '" >' . $therapy_rooms[$r] . '</option>';
                }

                echo '</select>';

                $con->close();
                ?>

                <!-- // Attendence status -->

                <input class="hide" type="text" readonly value="Pending" name="attended" />

                <button class="primary_btn" type="submit">Create Appointment</button>

            </form>


        </div>

    </div>

    <script type="text/javascript">
    const createAppoint = document.getElementById("create_appointment_btn");

    // addEventListener("submit", (e) => {
    //     alert('Created')
    // })
    </script>

</body>

</html>