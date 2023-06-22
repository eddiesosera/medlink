<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Appointment</title>
</head>

<body>



    <div class='editAppointment_wrap'>
        <?php

echo '<h1>Edit Appointment</h1>';

echo '<form  method="POST">';
echo '<div>Receptionist</div>';
echo '<div>'.$_GET['id'].'</div>';

echo '<br/>';
echo '<br/>';

echo '<div>Patient</div>';
echo '<input type="text" value="Patient" />';
echo '<div>Doctor</div>';
echo '<input type="text" value="Doctor"/>';
echo '<div>Date</div>';
echo '<input type="date" id="appointment_date"/>';

echo '<div>Time</div>';
$therapy_time_slots = array("09:00", "10:05", "11:05", "13:00", "14:05", "15:05");
echo '<select>';
foreach($therapy_time_slots as $slot){echo "<option>".$slot."</option>";};
echo '</select>';

echo '<br/>';
echo '<br/>';

echo '<div>Room</div>';
$therapy_rooms = array("A1", "A2", "B1", "B2");
echo '<select>';
foreach($therapy_rooms as $rooms){echo "<option>".$rooms."</option>";};
echo '</select>';


echo '<div>Attendance</div>';
echo '<select > <option>Attended</option> <option selected>Pending</option> <option>Postponed</option> </select>';

echo '<br/>';
echo '<br/>';

echo '<div>';
echo '<button>Save changes</button>';
echo '<a href="../index.php"><button id="cancelBtn_edit-appointment">Cancel</button></a>';
echo '</div>';

echo "</form>";
?>

    </div>

    <script type="text/javascript">
    const cancelBtn = document.querySelector("#cancelBtn_edit-appointment")
    cancelBtn.addEventListener("click", goBack)

    async function goBack(e) {
        window.history.back()
    }

    const date = document.querySelector("#appointment_date")
    date.addEventListener("change", showDate)

    async function showDate(e) {
        console.log(e.target.value)
    }
    </script>

</body>

</html>