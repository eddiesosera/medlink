<head>
    <!-- <link rel="stylesheet" href="./sidebar.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Hanken+Grotesk:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900;1000&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    </style>
    <style>
        <?php include 'sidebar.css';
        ?>
    </style>
</head>


<body onload='changeActivePage()'>

    <div class="sidebar-container">

        <div class="sidebar-top-container">
            <div class="sidebar-top-topWrap">
                <?php echo '<img id="sidebar-top-left-avatar" src="' . $_SESSION['profile'] . '" alt="" />' ?>
                <div class="sidebar-top-top-userWrap">
                    <div id="sidebar-top-top-user-name"><?php echo $_SESSION['name'] ?></div>
                    <?php echo '<div id="sidebar-top-top-user-rank">' . $_SESSION['rank_title'] . '</div>' ?>
                </div>
            </div>
            <div class="sidebar-top-top-btmBtn-wrap">
                <button id="sidebar-top-top-btmBtn">
                    <div id="sidebar-top-top-btmBtn-txt">Account Settings</div>
                </button>
                <button id="sidebar-top-top-btmBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="sidebar-top-top-btmBtn-icon">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M12 14V16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM21.4462 20.032L22.9497 21.5355L21.5355 22.9497L20.032 21.4462C19.4365 21.7981 18.7418 22 18 22C15.7909 22 14 20.2091 14 18C14 15.7909 15.7909 14 18 14C20.2091 14 22 15.7909 22 18C22 18.7418 21.7981 19.4365 21.4462 20.032ZM18 20C19.1046 20 20 19.1046 20 18C20 16.8954 19.1046 16 18 16C16.8954 16 16 16.8954 16 18C16 19.1046 16.8954 20 18 20Z">
                        </path>
                    </svg>
                    <div id="sidebar-top-top-btmBtn-txt">Manage Access</div>
                </button>
            </div>
        </div>
        <div class="sidebar-mid-container">
            <a href="/DV200_Term2_Receptionist-Dashboard/Term-2/app/">
                <div class="active-sidebar-wrap" id="sidebar-mid-homeWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="active-sidebar-icon" id="sidebar-mid-home-icon">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M20 20.0001C20 20.5524 19.5523 21.0001 19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001ZM7.5 13.0001C7.5 15.4854 9.51472 17.5001 12 17.5001C14.4853 17.5001 16.5 15.4854 16.5 13.0001H14.5C14.5 14.3808 13.3807 15.5001 12 15.5001C10.6193 15.5001 9.5 14.3808 9.5 13.0001H7.5Z">
                        </path>
                    </svg>
                    <div class="active-sidebar-text" id="sidebar-mid-home-txt">Home</div>
                </div>
            </a>
            <a href="/DV200_Term2_Receptionist-Dashboard/Term-2/app/patients.php">
                <div class="inactive-sidebar-wrap" id="sidebar-mid-patientWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inactive-sidebar-icon" id="sidebar-mid-patient-icon">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M18.3643 10.9792C19.9264 12.5413 19.9264 15.0739 18.3643 16.636L12.7075 22.2929C12.317 22.6834 11.6838 22.6834 11.2933 22.2929L5.63642 16.636C4.07432 15.0739 4.07432 12.5413 5.63642 10.9792C7.19851 9.41709 9.73117 9.41709 11.2933 10.9792L11.9997 11.6856L12.7075 10.9792C14.2696 9.41709 16.8022 9.41709 18.3643 10.9792ZM12.0004 1C14.2095 1 16.0004 2.79086 16.0004 5C16.0004 7.20914 14.2095 9 12.0004 9C9.79124 9 8.00038 7.20914 8.00038 5C8.00038 2.79086 9.79124 1 12.0004 1Z">
                        </path>
                    </svg>
                    <div class="inactive-sidebar-text" id="sidebar-mid-patient-txt">Patients</div>
                </div>
            </a>
            <a href="/DV200_Term2_Receptionist-Dashboard/Term-2/app/doctors.php">
                <div class="inactive-sidebar-wrap" id="sidebar-mid-doctorWrap">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inactive-sidebar-icon" id="sidebar-mid-doctor-icon">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M14.9571 15.564C17.6154 16.6219 19.5726 19.0639 19.9387 22H4.0625C4.42862 19.0639 6.38587 16.6219 9.04417 15.564L12.0006 20L14.9571 15.564ZM18.0006 2V8C18.0006 11.3137 15.3143 14 12.0006 14C8.6869 14 6.00061 11.3137 6.00061 8V2H18.0006ZM16.0006 8H8.00061C8.00061 10.2091 9.79147 12 12.0006 12C14.2098 12 16.0006 10.2091 16.0006 8Z">
                        </path>
                    </svg>
                    <div class="inactive-sidebar-text" id="sidebar-mid-doctor-txt">Doctor</div>
                </div>
            </a>
        </div>
        <div class="sidebar-btm-container">
            <a href="login/logout.php">
                <button id="sidebar-btm-logoutBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="sidebar-btm-logout-icon">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z">
                        </path>
                    </svg>
                    <div id="sidebar-mid-doctor-txt">Log out</div>
                </button>
            </a>
        </div>

    </div>

    <script type="text/javascript">
        console.log(window.location.pathname)

        function changeActivePage() {

            // Activate or Deactivate HOME Page on Navbar based on pathname
            if (window.location.pathname === '/DV200_Term2_Receptionist-Dashboard/Term-2/app/') {
                document.getElementById("sidebar-mid-homeWrap").classList.add('active-sidebar-wrap');
                document.getElementById("sidebar-mid-home-icon").classList.add('active-sidebar-icon');
                document.getElementById("sidebar-mid-homeWrap").classList.remove('inactive-sidebar-wrap');
                document.getElementById("sidebar-mid-home-icon").classList.remove('inactive-sidebar-icon');

                // alert('Home')
            } else {
                document.getElementById("sidebar-mid-homeWrap").classList.remove('active-sidebar-wrap');
                document.getElementById("sidebar-mid-home-icon").classList.remove('active-sidebar-icon');
                document.getElementById("sidebar-mid-homeWrap").classList.add('inactive-sidebar-wrap');
                document.getElementById("sidebar-mid-home-icon").classList.add('inactive-sidebar-icon');
            }

            // Activate or Deactivate PATIENTS Page on Navbar based on pathname
            if (window.location.pathname === '/DV200_Term2_Receptionist-Dashboard/Term-2/app/patients.php') {
                document.getElementById("sidebar-mid-patientWrap").classList.add('active-sidebar-wrap');
                document.getElementById("sidebar-mid-patient-icon").classList.add('active-sidebar-icon');
                document.getElementById("sidebar-mid-patientWrap").classList.remove('inactive-sidebar-wrap');
                document.getElementById("sidebar-mid-patient-icon").classList.remove('inactive-sidebar-icon');

                // alert('Patients')
            } else {
                document.getElementById("sidebar-mid-patientWrap").classList.remove('active-sidebar-wrap');
                document.getElementById("sidebar-mid-patient-icon").classList.remove('active-sidebar-icon');
                document.getElementById("sidebar-mid-patientWrap").classList.add('inactive-sidebar-wrap');
                document.getElementById("sidebar-mid-patient-icon").classList.add('inactive-sidebar-icon');
            }

            // Activate or Deactivate DOCTORS Page on Navbar based on pathname
            if (window.location.pathname === '/DV200_Term2_Receptionist-Dashboard/Term-2/app/doctors.php') {
                document.getElementById("sidebar-mid-doctorWrap").classList.add('active-sidebar-wrap');
                document.getElementById("sidebar-mid-doctor-icon").classList.add('active-sidebar-icon');
                document.getElementById("sidebar-mid-doctorWrap").classList.remove('inactive-sidebar-wrap');
                document.getElementById("sidebar-mid-doctor-icon").classList.remove('inactive-sidebar-icon');

                // alert('Doctor')
            } else {
                document.getElementById("sidebar-mid-doctorWrap").classList.remove('active-sidebar-wrap');
                document.getElementById("sidebar-mid-doctor-icon").classList.remove('active-sidebar-icon');
                document.getElementById("sidebar-mid-doctorWrap").classList.add('inactive-sidebar-wrap');
                document.getElementById("sidebar-mid-doctor-icon").classList.add('inactive-sidebar-icon');
            }
        }
    </script>

</body>