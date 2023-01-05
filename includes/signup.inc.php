<?php

// Instantiate SignupContr class
include "../controller/dbh.classes.php";
include "../controller/signup.classes.php";
include "../controller/signup-contr.classes.php";

if(isset($_POST["submit"]))
{
    // Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    
    
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    // echo "<pre>"; var_dump($signup);
    // die;

    // Running error handlers and user signup
   $res = $signup->signupUser();

//  echo "<pre>"; var_dump($res);
//     die;

    // Going back to front page
    // header("location; ../index.php?error=none");
    header("location: ../view/login.php");
}