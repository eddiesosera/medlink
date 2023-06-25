<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medlink: Manage Receptionists</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    <style>
    <?php include './receptionist.css';
    ?>
    </style>

</head>

<body>



    <div class="manageAccess_wrap">
        <div class="manageAccess_topWrap">
            <div style="color: black; font-size: 36px; font-family: Archivo; font-weight: 600;">
                Receptionists
            </div>
            <a href="new_receptionist.php">
                <button class="primary_btn">
                    New Receptionist
                </button>
            </a>
        </div>
        <div class="receptionist_List_wrap">

            <?php

            include 'config.php';

            session_start();

            if ($_SESSION['rank_id'] === "1") {

                include '../../component_crud/receptionist/read_receptionist.php';

                echo '</div>';
                echo '</div>';
            } else {
                echo '<div class="error_permission">Permission Required</div>';
                print_r(isset($_SESSION['rank_id']));
            }
            ?>

</body>

</html>