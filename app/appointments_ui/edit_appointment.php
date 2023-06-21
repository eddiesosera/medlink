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
echo '<div>Name of Rec</div>';
echo '<div>Patient</div>';
echo '<input type="text" value="Patient" />';
echo '<div>Doctor</div>';
echo '<input type="text" value="Doctor"/>';
echo '<div>Date</div>';
echo '<input type="date" value=""/>';
echo '<div>Attendance</div>';
echo '<select > <option>Attended</option> <option selected>Pending</option> <option>Postponed</option> </select>';

echo '<br/>';
echo '<br/>';

echo '<div>';
echo '<button>Save changes</button>';
echo '<a href="C:\xampp\htdocs\DV200_Term2_Receptionist-Dashboard\Term-2\app\index.php"><button id="cancelBtn_edit-appointment">Cancel</button></a>';
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
    </script>

</body>

</html>