<?php

// End session and redirect to index page
session_start();
session_destroy();
session_abort();

header("location: ../index.php");
exit();
