<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
</style>
<style>
<?php include '../../style/home.css';
?>
</style>

<?php


include "config.php";

echo '<ul class="appoinment_itemWrap">';

$query = "
select session.*, dctr.doctor_name, dctr.doctor_surname, recptn.receptionist_name,recptn.receptionist_surname, ptnt.patient_name, ptnt.patient_surname
from therapysession session, doctors dctr, receptionist recptn, patient ptnt
where session.receptionist_id=recptn.receptionist_id and session.doctor_id=dctr.doctor_id and session.patient_id=ptnt.patient_id";

$result = mysqli_query($con, $query);
while ($appoint = mysqli_fetch_assoc($result)) {

        echo '<li class="appoinment_item">';
        echo '<form class="appoinment_item_inner" class="form-inline m-2" action="update.php" method="POST">';

        $app_itm_each = "display:flex;align-items: center;";
        $app_itm_time = "border:0.5px solid #1B2423;color:#1B2423; padding:10px;border-radius:8px; font-weight:600;";
        echo '<div class"appointment_session_time" style="' . $app_itm_time . '" >' . $appoint['session_time'] . '</div>';
        // echo '<div>' . $appoint['session_date'] . '</div>';
        echo '<div style="' . $app_itm_each . '" class"appointment_patient_wrap">' . $appoint['patient_name'] . " " . $appoint['patient_surname'] . '</div>';
        echo '<div style="' . $app_itm_each . '" class"appointment_doctor_wrap">' . "Dr. " . $appoint['doctor_surname'] . " " . substr(trim($appoint['doctor_name']), 0, 1)  . '</div>';
        echo '<div style="' . $app_itm_each . '" class"appointment_receptionist_wrap">' . $appoint['receptionist_surname'] . " " . substr(trim($appoint['receptionist_name']), 0, 1) . '</div>';
        echo '<div style="' . $app_itm_each . '" class"appointment_session_room">' . $appoint['session_room'] . '</div>';
        echo '<div style="' . $app_itm_each . '" class"appointment_attended">' . $appoint['attended'] . '</div>';


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
        echo '<a style="' . $app_itm_each . '" class="secondary_btn_actn ' . $btn_class . '"';
        echo 'href="' . $edit_href_begin . $edit_href_id . $edit_href_rec . $edit_href_rec_id . $edit_href_doc . $edit_href_doc_id . $edit_href_pat . $edit_href_pat_id;
        echo $edit_href_date . $edit_href_time . $edit_href_room . $edit_href_attnd;
        echo '"' . '>Edit</a>';

        echo '<a style="' . $app_itm_each . '" class="secondary_btn_dngr btn-danger" href="./component_crud/appointment/delete_appointment.php?id=' . $appoint['therapySession_id'] . '" role="button">Delete</a>';


        echo '</form>';
        echo "</li>";
}

echo "</ul>";