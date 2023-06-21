<?php

include "config.php";

echo "<ul>";

$query="
select session.*, dctr.name, recptn.receptionist_name, ptnt.patient_name
from therapysession session, doctors dctr, receptionist recptn, patient ptnt
where session.receptionist_id=recptn.receptionist_id and session.doctor_id=dctr.doctor_id and session.patient_id=ptnt.patient_id";

$result=mysqli_query($con, $query);
while($appoint=mysqli_fetch_assoc($result)){

        echo '<li class="appoinment_item">';
        echo '<form class="form-inline m-2" action="update.php" method="POST">';

        echo '<div>'.$appoint['session_date'].'</div>';
        echo '<div>'."Dr. ".$appoint['name'].'</div>';
        echo '<div>'.$appoint['receptionist_name'].'</div>';
        echo '<div>'.$appoint['patient_name'].'</div>';
        echo '<div>'.$appoint['session_status'].'</div>';
        echo '<div>'.$appoint['attended'].'</div>';

        echo '<a class="btn btn-danger" href="./appointment_crud/delete_appointment.php?id=' . $appoint['therapySession_id'] . '" role="button">Delete</a>';
        echo '<a class="btn btn-danger" href="../app/appointments_ui/edit_appointment.php?id=' . $appoint['therapySession_id']."?date=".$appoint['session_date'] . '" role="button">Edit</a>';


        echo '</form>';
        echo "</li>";

}

echo "</ul>";

?>