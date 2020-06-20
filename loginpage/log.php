<?php
session_start();
include ('connect.php');
if(isset($_POST['submit'])){
    $username = trim($_POST['login']);

    $username = strtolower(str_replace(" ","",$username));


    $row = mysqli_query($con, "INSERT INTO login(email_id)  VALUES ('".$username."')");
    header("Location:password.php?un=$username");
    
}

?>