<?php 

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: dashboard.php');
    exit();
}

$quote = $_POST['quote'];
$author_name = $_POST['author'];
$author_image = $_FILES["author_image"];
$image_path = "";

if(isset($author_image) && $author_image['error'] == 0){
    $upload_dir = "uploads/";
    $image_name = time() . '_' . basename($author_image['name']);
    $target_path = $upload_dir . $image_name;

    if(move_uploaded_file($author_image['tmp_name'], $target_path )){
        $image_path  = $target_path;
    }
}

include 'db-conn.php';


$query = "INSERT INTO quote (quote, author_name, author_image) VALUES (?, ?, ?)";
$abc = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($abc, "sss", $quote, $author_name, $image_path);
mysqli_stmt_execute($abc);


header("Location: dashboard.php?path=add-quote");







// php mysql procedural insert data  

// 1. query
// 2. prepare
// 3. bind
// 4. execute


?>