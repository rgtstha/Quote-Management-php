<?php 

session_start();
$is_LoggedIn =  $_SESSION['is_loggedin'] ?? false;

if( !$is_LoggedIn){
    header("Location: login.php");
    exit();
}



echo "This is dashbaord";


?>