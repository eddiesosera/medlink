<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    <style>
    <?php include './style/home.css';
    ?>
    </style>
</head>

<body>

    <!-- Top Section -->
    <div class="home_content-wrap">
        <div class="home_content_top-wrap">
            <img class="home_content_top-imgbg" src="img/assets/background_banner2.jpg" alt="Quote Image Background" />
            <div class="home_content_top-quoteText">
                <?php
                echo '<p class="quoteText">';
                echo 'It always seems impossible until it’s done. You’ve got this ' . $_SESSION['name'] . '!';
                echo '</p>';
                ?>
            </div>
            <div class="home_content_top_interaction-wrap">
                <form class="home_content_top_interaction-search-wrap" action="POST">
                    <i class="searchIcon ri-search-2-line"></i>
                    <input id="searchInput" type="search" name="search_appointment"
                        placeholder="Search session details" />
                </form>
                <a href="component_ui/appointments/new_appointment.php">
                    <button class="home_content_top_interaction-newAppointment-wrap">
                        <i class="addBtn ri-add-line home_content_top_interaction-newAppointment-icon"></i>
                        <div class="home_content_top_interaction-newAppointment-text">New Appointment</div>
                    </button>
                </a>
            </div>
        </div>

        <div class="appointments_wrap">
            <div class="appointments_weekly_dates-wrap">
                <?php


                for ($x = 0; $x <= 6; $x++) {
                    echo "<div class='weekly_date-itm  selected_weekly_date-itm$x' id='selected_weekly_date weekly_date-itm$x'>";
                    $startdate = strtotime(" $x days");
                    echo "<div class='dates-day' id='date-day$x'>" . date("D", $startdate) . "</div>";
                    echo "<div class='dates' id='date$x'>" . date("M d", $startdate) . "</div>";
                    echo "</div>";
                }

                ?>
            </div>

            <div class="appointments_items-wrap">
                <?php

                include "component_crud/appointment/read_appointment.php";

                ?>
            </div>

        </div>
    </div>

    <script type="text/javascript">
    for (let i = 0; i <= 6; i++) {
        const date = document.querySelector("#date" + i)
        date.addEventListener("click", wave)

        async function wave(e) {
            // alert(e.target.id)
            document.querySelector("#date" + i).innerHTML = "YOU CLICKED ME!" + i;
        }
    }
    </script>

</body>