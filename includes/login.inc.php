<?php

// Instantiate SignupContr class
include "../controller/dbh.classes.php";
include "../controller/login.classes.php";
include "../controller/login-contr.classes.php";

if(isset($_POST["submit"]))
{
    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    $login = new LoginContr($uid, $pwd);
    
    // Running error handlers and user signup
    $login->loginUser();
    
}