<?php

include "config.php";

echo "<ul>";

$query = "
select session.*, dctr.doctor_name, dctr.doctor_surname, recptn.receptionist_name, ptnt.patient_name
from therapysession session, doctors dctr, receptionist recptn, patient ptnt
where session.receptionist_id=recptn.receptionist_id and session.doctor_id=dctr.doctor_id and session.patient_id=ptnt.patient_id";

$result = mysqli_query($con, $query);
while ($appoint = mysqli_fetch_assoc($result)) {

        echo '<li class="appoinment_item">';
        echo '<form class="form-inline m-2" action="update.php" method="POST">';

        echo '<div>' . $appoint['session_date'] . '</div>';
        echo '<div>' . "Dr. " . $appoint['doctor_name'] . " " . $appoint['doctor_surname'] . '</div>';
        echo '<div>' . $appoint['receptionist_name'] . '</div>';
        echo '<div>' . $appoint['patient_name'] . '</div>';
        echo '<div>' . $appoint['session_time'] . '</div>';
        echo '<div>' . $appoint['session_room'] . '</div>';
        echo '<div>' . $appoint['attended'] . '</div>';

        echo '<a class="btn btn-danger" href="./component_crud/appointment/delete_appointment.php?id=' . $appoint['therapySession_id'] . '" role="button">Delete</a>';

        // URL variable declaration sent to edit page
        $btn_class = "appointment_edit_btn";
        $edit_href_begin = "../app/component_ui/appointments/edit_appointment.php";
        $edit_href_id = "?id=" . urlencode($appoint['therapySession_id']);
        $edit_href_rec = "&receptionist=" . urldecode($appoint['receptionist_name']);
        $edit_href_rec_id = "&rec_id=" . urldecode($appoint['receptionist_id']);
        $edit_href_pat = "&patient=" . urldecode($appoint['patient_name']);
        $edit_href_pat_id = "&pat_id=" . urldecode($appoint['patient_id']);
        $edit_href_doc = "&doctor=" . urldecode($appoint['doctor_name']);
        $edit_href_doc_id = "&doc_id=" . urldecode($appoint['doctor_id']);
        $edit_href_date = "&session_date=" . urldecode($appoint['session_date']);
        $edit_href_time = "&session_time=" . urldecode($appoint['session_time']);
        $edit_href_room = "&session_room=" . urldecode($appoint['session_room']);
        $edit_href_attnd = "&attended=" . urldecode($appoint['attended']);

        // URL variable sent to Appointment Edit page
        echo '<a class="' . $btn_class . '"';
        echo 'href="' . $edit_href_begin . $edit_href_id . $edit_href_rec . $edit_href_rec_id . $edit_href_doc . $edit_href_doc_id . $edit_href_pat . $edit_href_pat_id;
        echo $edit_href_date . $edit_href_time . $edit_href_room . $edit_href_attnd;
        echo '"' . '>Edit</a>';


        echo '</form>';
        echo "</li>";
}

echo "</ul>";
