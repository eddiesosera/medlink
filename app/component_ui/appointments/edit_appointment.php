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

        include 'config.php';

echo '<h1>Edit Appointment</h1>';

echo '<form action="../../component_crud/appointment/update_appointment.php" method="POST">';
echo '<div>Receptionist</div>';
echo '<input name="edit_receptionist" type="text" readonly ';
if(isset($_GET['receptionist'])){
echo 'value="'.$_GET['receptionist'].'"';
}
echo '/>';

echo '<br/>';
echo '<br/>';


// Patient drop down with selected appoinment on select
echo '<div>Patients</div>';
$sql_patient = "select *, ptnt.patient_name
from therapysession session, patient ptnt
where session.patient_id=ptnt.patient_id";

$result = $con -> query($sql_patient);

echo '<select name="edit_patient" key="">';
while($patient = $result->fetch_assoc()) {
        if ($_GET['pat_id'] == $patient['patient_id'])
        {
            echo '<option selected value="'.$patient['patient_id'].'">'.$patient['patient_name'].'</option>';
        }else{
            echo '<option value="'.$patient['patient_id'].'">'.$patient['patient_name'].'</option>';
        }
}
echo "</select>";


// Patient drop down with selected appoinment on select
echo '<div>Doctor</div>';
$sql_doctor = "select *, dctr.doctor_name
from therapysession session, doctors dctr
where session.doctor_id=dctr.doctor_id";

$result_doc = $con -> query($sql_doctor);

echo '<select name="edit_doctor" key="">';
while($doctor = $result_doc->fetch_assoc()) {
        if ($_GET['doc_id'] == $doctor['doctor_id'])
        {
            echo '<option selected value="'.$doctor['doctor_id'].'">'.$doctor['doctor_name'].'</option>';
        }else{
            echo '<option  value="'.$doctor['doctor_id'].'">'.$doctor['doctor_name'].'</option>';
        }
}
echo "</select>";


// Date picker with init date
echo '<div>Date</div>';
echo '<input type="date" name="edit_date" value="2023-06-06" id="appointment_date"/>';


// Time slots
echo '<div>Time</div>';

$initTime ='09:30';

$sql_time = "select *
from therapysession session
where session.session_time=session.session_time";

$result_time = $con -> query($sql_time);

$therapy_time_slots = array("09:00", "10:05", "11:05", "13:00", "14:05", "15:05");
echo '<select>';

if($sessTime = $result_time->fetch_assoc()){
    for($t = 0; $t <= 5; $t++){
        if ($_GET['session_time'] == $therapy_time_slots[$t]){
            echo '<option selected value"'.$therapy_time_slots[$t].'" >'.$therapy_time_slots[$t].'</option>';
        }else{
        echo '<option value"'.$therapy_time_slots[$t].'" >'.$therapy_time_slots[$t].'</option>';
        }
    };
}

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

$con -> close();

echo '<div>';
echo '<button role"button" type="submit">Save changes</button>';
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