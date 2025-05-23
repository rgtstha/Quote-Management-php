<?php 

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: dashboard.php');
    exit();
}

$quote = $_POST['quote'];
$author_name = $_POST['author'];

include 'db-conn.php';


"Quote"




// php mysql procedural insert data  

// 1. query
// 2. prepare
// 3. bind
// 4. execute


?>