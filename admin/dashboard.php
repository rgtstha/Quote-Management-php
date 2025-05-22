<?php

session_start();
$is_LoggedIn =  $_SESSION['is_loggedin'] ?? false;

if (!$is_LoggedIn) {
    header("Location: login.php");
    exit();
}


$path = $_GET['path'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <title>Document</title>
</head>

<body>

    <main class="relative h-screen overflow-hidden bg-gray-100 dark:bg-gray-800 rounded-2xl">
        <div class="flex items-start justify-between">
            <div class="relative hidden h-screen my-4 ml-4 shadow-lg lg:block w-80">
                <div class="h-full bg-white rounded-2xl dark:bg-gray-700">
                    <div class="flex items-center justify-center pt-6">
                        <svg width="35" height="30" viewBox="0 0 256 366" version="1.1" preserveAspectRatio="xMidYMid">
                            <defs>
                                <linearGradient x1="12.5189534%" y1="85.2128611%" x2="88.2282959%" y2="10.0225497%" id="linearGradient-1">
                                    <stop stop-color="#FF0057" stop-opacity="0.16" offset="0%">
                                    </stop>
                                    <stop stop-color="#FF0057" offset="86.1354%">
                                    </stop>
                                </linearGradient>
                            </defs>
                            <g>
                                <path d="M0,60.8538006 C0,27.245261 27.245304,0 60.8542121,0 L117.027019,0 L255.996549,0 L255.996549,86.5999776 C255.996549,103.404155 242.374096,117.027222 225.569919,117.027222 L145.80812,117.027222 C130.003299,117.277829 117.242615,130.060011 117.027019,145.872817 L117.027019,335.28252 C117.027019,352.087312 103.404567,365.709764 86.5997749,365.709764 L0,365.709764 L0,117.027222 L0,60.8538006 Z" fill="#001B38">
                                </path>
                                <circle fill="url(#linearGradient-1)" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                                </circle>
                                <circle fill="url(#linearGradient-1)" opacity="0.5" transform="translate(147.013244, 147.014675) rotate(90.000000) translate(-147.013244, -147.014675) " cx="147.013244" cy="147.014675" r="78.9933938">
                                </circle>
                            </g>
                        </svg>
                    </div>
                    <nav class="mt-6">
                        <div>
                            <a class="flex items-center justify-start w-full p-4 my-2 font-thin text-blue-500 uppercase transition-colors duration-200 border-r-4 border-blue-500 bg-gradient-to-r from-white to-blue-100 dark:from-gray-700 dark:to-gray-800" href="?path=dashboard">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Dashboard
                                </span>
                            </a>
                            <a class="flex items-center justify-start w-full p-4 my-2 font-thin text-gray-500 uppercase transition-colors duration-200 dark:text-gray-200 hover:text-blue-500" href="?path=add-quote">
                                <span class="text-left">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 16.6944 7.30558 20.5 12 20.5C16.6944 20.5 20.5 16.6944 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM12 7C12.4142 7 12.75 7.33579 12.75 7.75V11.25H16.25C16.6642 11.25 17 11.5858 17 12C17 12.4142 16.6642 12.75 16.25 12.75H12.75V16.25C12.75 16.6642 12.4142 17 12 17C11.5858 17 11.25 16.6642 11.25 16.25V12.75H7.75C7.33579 12.75 7 12.4142 7 12C7 11.5858 7.33579 11.25 7.75 11.25H11.25V7.75C11.25 7.33579 11.5858 7 12 7Z" />
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Add Quote
                                </span>
                            </a>
                            <a class="flex items-center justify-start w-full p-4 my-2 font-thin text-gray-500 uppercase transition-colors duration-200 dark:text-gray-200 hover:text-blue-500" href="logout-handle.php">
                                <span class="text-left">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.25 3C4.45507 3 3 4.45507 3 6.25V17.75C3 19.5449 4.45507 21 6.25 21H15.25C15.6642 21 16 20.6642 16 20.25C16 19.8358 15.6642 19.5 15.25 19.5H6.25C5.2835 19.5 4.5 18.7165 4.5 17.75V6.25C4.5 5.2835 5.2835 4.5 6.25 4.5H15.25C15.6642 4.5 16 4.16421 16 3.75C16 3.33579 15.6642 3 15.25 3H6.25ZM17.5303 7.21967C17.2374 6.92678 16.7626 6.92678 16.4697 7.21967C16.1768 7.51256 16.1768 7.98744 16.4697 8.28033L19.4393 11.25H8.75C8.33579 11.25 8 11.5858 8 12C8 12.4142 8.33579 12.75 8.75 12.75H19.4393L16.4697 15.7197C16.1768 16.0126 16.1768 16.4874 16.4697 16.7803C16.7626 17.0732 17.2374 17.0732 17.5303 16.7803L21.7803 12.5303C22.0732 12.2374 22.0732 11.7626 21.7803 11.4697L17.5303 7.21967Z" />
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Logout
                                </span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <div class="h-screen pt-2 pb-24 pl-2 pr-2 overflow-auto md:pt-0 md:pr-0 md:pl-0">

                <!-- right content -->

                <?php 

                
                if($path === 'add-quote'){
                    include 'add-quote.php';
                } else {
                    include 'quote-list.php';
                }
                
                ?>


                </div>
            </div>
        </div>
    </main>

</body>

</html>