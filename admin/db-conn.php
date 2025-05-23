<?php 

$conn = mysqli_connect("localhost", "root", "", "quote_mgmt", "3306");

if($conn == false){
    echo "Connection Failed";
} else {
    echo "Connection Successful";
}
