<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medlink: Patients</title>
  <style>
    <?php include 'index.css';
    include './style/patients_doctors.css';
    ?>
  </style>
</head>

<body>

  <!-- Sidebar init -->
  <?php
  include './sidebar/sidebar.php';
  include 'config.php';
  ?>

  <!-- Patients Content -->
  <div class="patients_wrap">
    <div class="patients_top_wrap">
      <div class="patients_top_wrap_l_heading">
        Patients
      </div>
      <div class="patients_top_wrap_r_interact_wrap">
        <a href="">
          <button class="top_secondary_btn patients_top_wrap_r_interact_wrap_newAppointment">
            New Appointment
          </button>
        </a>
        <button class="top_primary_btn patients_top_wrap_r_interact_wrap_newPatient">
          Add New Patient
        </button>
      </div>
    </div>

    <hr class="hr_midbody" />


    <div class="patients_body_wrap">

      <!-- Left card displaying patients  -->
      <div class="patients_body_wrap_inner">

        <?php

        echo '<div class="patients_body_l_wrap_view">';
        echo  '<div class="patients_body_l_top">';
        echo    '<img src="" alt="Patient Profile Image" />';
        echo    '<div class="patients_body_l_nav">';
        echo     '<button class="patients_body_l_nav_prev">Prev</button>';
        echo      '<button class="patients_body_l_nav_prev">Next</button>';
        echo    '</div>';
        echo  '</div>';
        echo '<div class="patients_body_l_mid">';
        echo    '<div class="patients_body_l_mid_names">';
        echo      '<div class="patients_body_l_mid_fname">Eddie</div>';
        echo      '<div class="patients_body_l_mid_surname">Gylla</div>';
        echo    '</div>';
        echo    '<div class="patients_body_l_mid_contact">';
        echo      '<div class="patients_body_l_mid_contact_nmbr">+2787512345</div>';
        echo      '<div class="patients_body_l_mid_contact_email">edg@gmail.com</div>';
        echo    '</div>';
        echo    '<div class="patients_body_l_mid_spec">';
        echo      '<div class="patients_body_l_mid_spec_contact_illness">Mild Depression</div>';
        echo      '<div class="patients_body_l_mid_spec_contact_mdclAid">MediCare</div>';
        echo    '</div>';
        echo  '</div>';
        echo  '<div class="patients_body_l_mid_2">';
        echo    '<div class="patients_body_l_mid_2_extra">';
        echo      '<div class="patients_body_l_mid_2_extra_age_label">Age</div>';
        echo      '<div class="patients_body_l_mid_2_extra_age">32</div>';
        echo      '<div class="patients_body_l_mid_2_extra_gender_label">Gender</div>';
        echo      '<div class="patients_body_l_mid_2_extra_gender">M</div>';
        echo    '</div>';
        echo  '</div>';
        echo '</div>';
        echo '<div class="patients_body_l_bttm">';
        echo  '<a href=""><button class="top_primary_btn patients_body_l_bttm_interact_edit">Edit</button></a>';
        echo ' <a href=""> <button class="top_secondary_btn patients_body_l_bttm_interact_delete">Delete</button></a>';
        echo '</div>';

        ?>

      </div>


      <!-- List formart of Patients -->
      <?php
      echo '<div class="patients_body_wrap_r_list">';
      echo  '<div class="patients_body_wrap_r_list_top">';
      echo    '<form class="patients_body_wrap_r_list_top_l_interactive">';
      echo      '<input class="patients_body_wrap_r_list_top_l_interactive_searchbar" type="search" placeholder="Search patient" />';
      echo      '<a href=""><button>Search</button></a>';
      echo    '</form>';
      echo  '</div>';
      echo  '<div class="patients_body_wrap_r_list_bttm">';

      $aaaaace = 5555;

      include 'component_crud/patient/read_patient.php';

      echo '</div>';

      ?>

    </div>

  </div>


  </div>


</body>

</html>