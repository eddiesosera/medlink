<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medlink</title>
  <style>
    <?php include 'index.css';
    ?>
  </style>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

  <!-- Sidebar init -->
  <?php

  session_start();

  if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['name'])) {


    include './sidebar/sidebar.php';

    // echo '<div style="position:fixed;right:0;">';
    // echo print_r($_SESSION['id']);
    // echo print_r($_SESSION['email']);
    // echo print_r($_SESSION['name']);
    // echo print_r($_SESSION['status']);
    // echo '</div>';

    include './home.php';
  } else {
    header("location: login/login.php");
    exit();
  }
  ?>


</body>

</html>