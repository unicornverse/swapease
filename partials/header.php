<?php 
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwapEase</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="input.css">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- navbar section -->
    <nav class="bg-gray-100">
        <div class="max-w-6xl mx-auto ">
            <div class="flex justify-between ">
                <!-- primary nav -->
                <div class="hidden md:flex  items-center space-x-1">
                    <a href="index.php" class="py-2 px-3  text-gray-700 hover:text-black">Home</a>
                    <a href="#" class="py-2 px-3  text-gray-700 hover:text-black">Explore</a>
                    <!-- <a href="#" class="py-2 px-3  text-gray-700 hover:text-black">Contact</a> -->
                </div>

                <div class="flex space-x-4 ">
                    <!-- logo section -->
                    <div>
                        <a href="index.php" class="flex items-center py-1 px-1">
                            <img class="w-64" src="images/SwapEase.png" alt="SwapEase">
                        </a>
                    </div>
                </div>

                <!-- secondary nav -->
                <div class=" hidden md:flex  items-center space-x-1">
                    <a href="#" class=" py-2 px-3 hover:text-[#002D74]" id="del-btn1">Login</a>
                    <a href="signup.php" class="py-2 px-3 hover:bg-slate-500 bg-[#002D74] text-white rounded-full ">Join
                        Now</a>
                </div>

                <!-- mobile button -->
                <div class="md:hidden flex items-center" id="btn">
                    <button type="button" class="mobile-menu-button hover:bg-blue-300">
                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                </div>


            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden " id="mobile-menu">
            <a class="block py-2 px-2 hover:text-gray-500 text-center" href="index.php">Home</a>
            <a class="block py-2 px-2 hover:text-gray-500 text-center" href="#">Explore</a>
            <a class=" block py-4 px-2 hover:bg-slate-400 text-center border bg-[#002D74] text-white" id="del-btn2"
                href="#">Login</a>
        </div>
    </nav>

</body>


</html>