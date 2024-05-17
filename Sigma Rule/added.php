<?php

if(isset($_POST['submit'])){
    include 'connect.php';
    $no = $_POST['ruleno'];
    $rule = $_POST['rule'];
    $rule = str_replace("'",'"',$rule);
    $sql = "INSERT INTO rule(ruleno, ruletxt) VALUES('$no','$rule');";

    if(mysqli_query($conn, $sql)){
        header('Location: addRule.php?error=Added Successfully.!!');
    }
    else{
        $tx = "Your Sigma Luck Is Over Error Occured.!!".mysqli_error($conn);
        header('Location: addRule.php?error='.$tx);

    }
}