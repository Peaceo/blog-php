<?php
session_start();
session_unset();
session_destroy();



// Going back to front page
header("location: ../index.php");

    // echo "Succesfully signed out! Click  <a href = '../view/login.php'> here </a>   to Login again";

    // header("location: ../view/index.php?error=none");


?>