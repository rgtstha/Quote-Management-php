<?php 

// Select * from user when userid = 1;
// select * from user;



// 1. Query build
// 2. prepare
// 3. bind param
// 4. execute
// 5. get result
// 6. fetch assoc


// price = 2500;
// discount = 5%:
// total_price = ?


// price = 2500;
// discount = 5;

// let total_price = ?;


// discount_price = price * discount/ 100; 


// total_price  = price - discount_price ;










include 'db-conn.php';

$query = "SELECT * from quote ORDER BY RAND() LIMIT 1";
$stmt =  mysqli_prepare($conn, $query);
mysqli_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
    <link rel="stylesheet" href="src/output.css">
</head>
<body>
    <!-- Fullscreen Background -->
    <div class="relative flex h-screen w-full items-center justify-center bg-cover bg-center" style="background-image: url('./images/background.jpg');">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-[radial-gradient(ellipse_at_center,_rgba(0,0,0,0.6)_50%,_transparent_90%)]"></div>
        <!-- Radial Gradient Content Wrapper -->
        <div class="relative z-30 flex w-full max-w-2xl flex-col items-center rounded-2xl px-8 py-5 text-center">
            <!-- Heading -->
            <h1 class="mb-2 text-5xl font-bold text-white drop-shadow-lg md:text-6xl"><?php echo $data['quote']   ?></h1>
            <div class="flex gap-x-2">
                <img src=" <?php   echo 'http://localhost/quote-mgmt-training/admin/' .   $data['author_image']    ?>" alt="author-image" class="h-6 w-6 rounded-4xl border border-white">
                <p class="text-center text-white italic">- <?php echo $data['author_name'] ?></p>
            </div>

            <div class="mt-10">
                <a href="<?php echo $_SERVER["PHP_SELF"]; ?>" class="rounded-xs bg-white px-4 py-2 font-light uppercase transition-all hover:bg-green-700 hover:text-white">Generate</a>
            </div>
        </div>
    </div>
    
</body>
</html>