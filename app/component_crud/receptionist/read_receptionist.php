<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    <style>
    <?php include '../component_ui/receptionist/receptionist.css';
    ?>
    </style>
</head>

<?php

include "config.php";

$sql_receptionist = "select *
from receptionist rcptn, receptionist_rank rcptn_rnk
where rcptn.receptionist_rank_id=rcptn_rnk.rank_id";

$result = $con->query($sql_receptionist);

echo '<ul class="receptionist_wrap">';
while ($receptionist = $result->fetch_assoc()) {

    // Style Head Receptionist differently

    // if ($_SESSION['id'] == $receptionist['receptionist_id']) {
    echo '<li class="receptionist_itmHead">';
    echo '<img style="height:50px;" class="receptionist_itm_img" src="../../img/receptionists/' . $receptionist['receptionist_profile_url'] . '"/>';
    echo '<div class="receptionist_itm_names rec_itm_dvdr rec_itm_dvdr_top">';
    echo '<div class="receptionist_itm_name">' . $receptionist['receptionist_name'] . " " . $receptionist['receptionist_surname'] . '</div>';
    echo '<div class="receptionist_itm_rank">' . $receptionist['rank_title'] . '</div>';
    echo '</div>';
    echo '<div class="receptionist_itm_bio rec_itm_dvdr">';
    echo '<div class="receptionist_itm_gender">' . $receptionist['receptionist_gender'] . '</div>';
    echo '<div class="receptionist_itm_age">' . $receptionist['receptionist_age'] . '</div>';
    echo '</div>';
    echo '<div class="receptionist_itm_bio rec_itm_dvdr rec_itm_dvdr_btm">';
    echo '<div class="receptionist_itm_email">' . $receptionist['receptionist_email'] . '</div>';
    echo '<div class="receptionist_itm_phone">' . "+27 " . $receptionist['receptionist_phone_number'] . '</div>';
    echo '</div>';
    if ($receptionist['rank_id'] === '2') {
        echo '<a href="../../component_crud/receptionist/delete_receptionist.php?id=' . $receptionist['receptionist_id'] . '" >';
        echo '<button class="receptionist_itm_remove secondary_btn_dngr">' . "Remove" . '</button>';
        echo '</a>';
    } else if ($_SESSION['id'] === $receptionist['receptionist_id']) {
        echo '<a href="../../login/logout.php">';
        echo '<button class="receptionist_itm_logout_head secondary_btn_dngr">' . "Logout" . '</button>';
        echo '<a/>';
    } else {
        echo '<a href="">';
        echo '<button class="receptionist_itm_logout_head secondary_btn_dngr">' . "No Action" . '</button>';
        echo '<a/>';
    }
    echo '</li>';
}
echo '</ul>';