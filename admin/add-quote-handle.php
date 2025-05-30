<?php 

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: dashboard.php');
    exit();
}

$quote = $_POST['quote'];
$author_name = $_POST['author'];




include 'db-conn.php';



$query = "INSERT INTO quote (quote, author_name) VALUES (?, ?)";
$abc = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($abc, "ss", $quote, $author_name);
mysqli_stmt_execute($abc);


header("Location: dashboard.php?path=add-quote");







// php mysql procedural insert data  

// 1. query
// 2. prepare
// 3. bind
// 4. execute


?>