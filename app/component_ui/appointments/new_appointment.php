<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Appointment</title>
</head>

<body>

    <div>


        <div class='newAppointment_wrap'>

            <h1>Edit Appointment</h1>

            <form action="../../component_crud/appointment/create_appointment.php" method="POST">

                <!-- // Receptionist logged in -->
                <input type="text" readonly value="1" name="receptionist" />

                <?php

                include 'config.php';
                // Patient drop down with selected appoinment on select
                echo '<div>Patients</div>';
                $sql_patient = "select *
            from patient ptnt
            where ptnt.patient_id";

                $result = $con->query($sql_patient);

                echo '<select required name="patient" key="">';
                echo '<option value="">Select Patient</option>';
                while ($patient = $result->fetch_assoc()) {
                    echo '<option value="' . $patient['patient_id'] . '">' . $patient['patient_name'] . " " . $patient['patient_surname'] . '</option>';
                }
                echo "</select>";


                // Patient drop down with selected appoinment on select
                echo '<div>Doctors</div>';
                $sql_doctor = "select *
            from doctors dctr
            where dctr.doctor_id";

                $result = $con->query($sql_doctor);

                echo '<select required name="doctor" key="">';
                echo '<option value="">Select Doctor</option>';
                while ($doctor = $result->fetch_assoc()) {
                    echo '<option value="' . $doctor['doctor_id'] . '">' . $doctor['doctor_name'] . " " . $doctor['doctor_surname'] . '</option>';
                }
                echo "</select>";


                // Date picker with init date
                echo '<div>Date</div>';
                echo '<input type="date" name="date" value="today" id="appointment_date"/>';


                // Time slots
                echo '<div>Time</div>';

                $therapy_time_slots = array("09:00", "10:05", "11:05", "13:00", "14:05", "15:05");
                echo '<select name="time">';

                for ($t = 0; $t <= (count($therapy_time_slots) - 1); $t++) {
                    echo '<option value"' . $therapy_time_slots[$t] . '" >' . $therapy_time_slots[$t] . '</option>';
                };

                echo '</select>';

                echo '<br/>';
                echo '<br/>';


                // Session Room
                echo '<div>Room</div>';

                $therapy_rooms = array("A1", "A2", "B1", "B2", "C1", "C2");
                echo '<select name="room">';

                for ($r = 0; $r <= (count($therapy_rooms) - 1); $r++) {
                    echo '<option value"' . $therapy_rooms[$r] . '" >' . $therapy_rooms[$r] . '</option>';
                }

                echo '</select>';

                $con->close();
                ?>

                <!-- // Attendence status -->

                <input type="text" readonly value="Pending" name="attended" />

                <br />
                <br />


                <div>

                    <button type="submit">Save changes</button>
                    <a href="../index.php"><button id="cancelBtn_edit-appointment">Cancel</button></a>'

                </div>



            </form>


        </div>

    </div>

    <script type="text/javascript">
        const createAppoint = document.getElementById("create_appointment_btn");

        addEventListener("submit", (e) => {
            alert('Created')
        })
    </script>

</body>

</html>