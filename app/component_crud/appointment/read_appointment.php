<?php

include "config.php";

echo "<ul>";

$query="
select session.*, dctr.doctor_name, recptn.receptionist_name, ptnt.patient_name
from therapysession session, doctors dctr, receptionist recptn, patient ptnt
where session.receptionist_id=recptn.receptionist_id and session.doctor_id=dctr.doctor_id and session.patient_id=ptnt.patient_id";

$result=mysqli_query($con, $query);
while($appoint=mysqli_fetch_assoc($result)){

        echo '<li class="appoinment_item">';
        echo '<form class="form-inline m-2" action="update.php" method="POST">';

        echo '<div>'.$appoint['session_date'].'</div>';
        echo '<div>'."Dr. ".$appoint['doctor_name'].'</div>';
        echo '<div>'.$appoint['receptionist_name'].'</div>';
        echo '<div>'.$appoint['patient_name'].'</div>';
        echo '<div>'.$appoint['session_time'].'</div>';
        echo '<div>'.$appoint['session_room'].'</div>';
        echo '<div>'.$appoint['attended'].'</div>';

        echo '<a class="btn btn-danger" href="./component_crud/appointment/delete_appointment.php?id=' . $appoint['therapySession_id'] . '" role="button">Delete</a>';

        $btn_class = "appointment_edit_btn";
        $edit_href_begin = "../app/component_ui/appointments/edit_appointment.php";
        $edit_href_id = "?id=".urlencode($appoint['therapySession_id']);
        $edit_href_receptionist = "&receptionist=".urldecode($appoint['receptionist_name']);
        $edit_href_receptionist = "&patient=".urldecode($appoint['patient_name']);
        $edit_href_receptionist = "&doctor=".urldecode($appoint['doctor_name']);
        

        
        echo '<a class="'.$btn_class.'"'.'href="'.$edit_href_begin.$edit_href_id.$edit_href_receptionist.'"'.'>Edit</a>';


        echo '</form>';
        echo "</li>";

}

echo "</ul>";

?>