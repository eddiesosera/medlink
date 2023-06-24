<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medlink: Doctors</title>
  <style>
    <?php include 'index.css';
    include './style/patients_doctors.css';
    ?>
  </style>
</head>

<body>

  <!-- Sidebar init -->
  <?php

  session_start();

  include './sidebar/sidebar.php';
  ?>

  <!-- doctors Content -->
  <div class="doctors_wrap">
    <div class="doctors_top_wrap">
      <div class="doctors_top_wrap_l_heading">
        Doctors
      </div>
      <div class="doctors_top_wrap_r_interact_wrap">
        <a href="component_ui/appointments/new_appointment.php">
          <button class="top_secondary_btn doctors_top_wrap_r_interact_wrap_newAppointment">
            New Appointment
          </button>
        </a>
        <button class="top_primary_btn doctors_top_wrap_r_interact_wrap_newDoctor">
          Add New Doctor
        </button>
      </div>
    </div>
  </div>

  <hr class="hr_midbody" />

  <div class="doctors_body_wrap">
    <div class="doctors_body_l_wrap_view">

    </div>
    <div class="doctors_body_wrap_r_list">

    </div>
  </div>

</body>

</html>