
<?php

$servername="localhost";
$username="root";
$pass="Pass@123";
$db = "sigma";


$conn= mysqli_connect($servername,$username,$pass,$db);
if(!$conn){
    die("Not Connected beacause-->>".mysqli_connect_error($conn));
}
else{
    // echo "Connected Successfully";
}