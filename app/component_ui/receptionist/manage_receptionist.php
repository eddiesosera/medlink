<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medlink: Manage Receptionists</title>
</head>

<body>

    <?php

    include 'config.php';

    session_start();

    if ($_SESSION['rank_id'] === "1") {

        echo '<div class="manageAccess_wrap">';
        echo '<div class="manageAccess_topWrap">';
        echo '<div style="width: 969px; height: 60px; justify-content: flex-start; align-items: center; gap: 550px; display: inline-flex">';
        echo '<div style="color: black; font-size: 48px; font-family: Archivo; font-weight: 500; word-wrap: break-word">';
        echo ' Receptionists';
        echo '</div>';
        echo '<a href="new_receptionist.php">';
        echo ' <div style="width: 120px; height: 60px; opacity: 0.40; border-radius: 40px; border-left: 2px #676767 solid; border-top: 2px #676767 solid; border-right: 2px #676767 solid; border-bottom: 2px #676767 solid">';
        echo 'New Receptionist';
        echo '</div>';
        echo '</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="receptionist_List_wrap">';

        include '../../component_crud/receptionist/read_receptionist.php';

        echo '</div>';
        echo '</div>';
    } else {
        echo 'Permission Required';
        print_r(isset($_SESSION['rank_id']));
    }
    ?>

</body>

</html>