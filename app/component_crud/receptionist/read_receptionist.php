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
    echo '<img style="height:50px;" class="receptionist_itm_img" src="../../img/' . $receptionist['receptionist_profile_url'] . '"/>';
    echo '<div class="receptionist_itm_name">' . $receptionist['receptionist_name'] . " " . $receptionist['receptionist_surname'] . '</div>';
    echo '<div class="receptionist_itm_rank">' . $receptionist['rank_title'] . '</div>';
    echo '<div class="receptionist_itm_gender">' . $receptionist['receptionist_gender'] . '</div>';
    echo '<div class="receptionist_itm_age">' . $receptionist['receptionist_age'] . '</div>';
    echo '<div class="receptionist_itm_gender">' . $receptionist['receptionist_email'] . '</div>';
    echo '<div class="receptionist_itm_gender">' . $receptionist['receptionist_phone_number'] . '</div>';
    if ($receptionist['rank_id'] === '2') {
        echo '<a href="../../component_crud/receptionist/delete_receptionist.php?id=' . $receptionist['receptionist_id'] . '" >';
        echo '<button class="receptionist_itm_remove">' . "Remove" . '</button>';
        echo '</a>';
    } else {
        echo '<a href="../../login/logout.php">';
        echo '<button class="receptionist_itm_logout_head">' . "Logout" . '</button>';
        echo '<a/>';
    }
    echo '</li>';
    // } else {
    // echo '<li ul class="receptionist_itm>';
    // echo '<div class="receptionist_itm_"></div>';
    // echo '</li>';
    // }
}
echo '<ul>';
