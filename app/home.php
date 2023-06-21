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
            <img class="home_content_top-imgbg"
                src="https://images.unsplash.com/photo-1686884575344-9a506e1426f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                alt="Quote Image Background" />
            <p class="home_content_top-quoteText"> It always seems impossible until it’s done. You’ve got this Pamela
            </p>
            <div class="home_content_top_interaction-wrap">
                <div class="home_content_top_interaction-search-wrap">
                    <i class="ri-search-2-line"></i>
                    <input type="search" placeholder="Search session details" />
                </div>
                <a href="appointments_ui/new_appointment.php">
                    <div class="home_content_top_interaction-newAppointment-wrap">
                        <i class="ri-add-line home_content_top_interaction-newAppointment-icon"></i>
                        <div class="home_content_top_interaction-newAppointment-text">Appointment</div>
                    </div>
                </a>
            </div>
        </div>

        <di class="appointments_wrap">
            <div class="appointments_weekly_dates-wrap">
                <?php 

                
                    for ($x = 0; $x <= 6; $x++) {
                        echo"<div class='weekly_date-itm' id='weekly_date-itm$x'>";
                            $startdate=strtotime(" $x days");
                            echo "<div class='dates-day' id='date-day$x'>". date("D",$startdate)."</div>" ;
                            echo "<div class='dates' id='date$x'>". date("M d",$startdate)."</div>";
                        echo "</div>";
                      }
               
                ?>
            </div>

            <div class="appointments_items-wrap">
                <?php

                include "appointment_crud/read_appointment.php"; 

                ?>
            </div>

        </di>
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