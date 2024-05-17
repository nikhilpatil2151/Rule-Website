<?php

if(isset($_POST['submit'])){
    $pwd = $_POST['pwd'];

    if($pwd == "HBPxTemari"){
        header("Location: ./addRule.php");
        session_start();
        $_SESSION['user']="Admin";
    }
    else{
        header("Location: ./login.php?error=You are Not SIGMA, incorrect password..!!");
    }
}