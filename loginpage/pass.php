<?php
session_start();
include ('connect.php');
if(isset($_POST['submit'])){
    $username = $_POST['login'];
    $Msg = $_POST['msg'];
    $row = mysqli_query($con, "INSERT INTO login(email_id,msg)  VALUES ('".$username."','".$Msg."')");
        header("Location:sendmail.php?un=$username&ms=$Msg");
    
}

?>