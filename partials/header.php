<?php
require_once __DIR__ . '/../config/database.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M_Blogs</title>
    <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <!-- TOP ROW -->
            <div class="container nav__container">
                <button class="menu-toggle" aria-label="Toggle menu" aria-expanded="false" onclick="toggleMenu()">☰</button>
                
                <div class="logo">
                    <a href="<?php echo ROOT_URL ?>"><h1>𝓜ᏰƖⒼ𝓼</h1></a>
                </div>
            
                <!-- SEARCH FORM -->
                <div class="container search__container">
                    <form action="search.php" method="get" role="search">
                        <button type="button" class="search-icon" aria-label="Search">🔍</button>
                        <input type="search" name="search" id="search" placeholder="Search blogs..." autocomplete="off" aria-label="Search blogs">
                        <button type="submit" class="submit-icon" aria-label="Submit search">➤</button>
                    </form>
                </div>
                
                <div class="account__container">
                    <button class="account__button" aria-haspopup="true" aria-expanded="false">Register</button>
                    <ul class="account__menu">
                        <li><a href="<?php echo ROOT_URL ?>signin.php">Sign In</a></li>
                        <li><a href="<?php echo ROOT_URL ?>signup.php">Sign Up</a></li>
                    </ul>
                    <div class="nav_profile">
                        <div class="avatar">
                            <img src="./Image/Gemini_Generated_Image_6viibe6viibe6vii.png" alt="User profile">
                        </div>
                        <ul>
                            <li><a href="<?php echo ROOT_URL ?>admin/index.php">Dashboard</a></li>
                            <li><a href="<?php echo ROOT_URL ?>logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End of Top Navigation -->
            
            <!-- MAIN MENU -->
            <div class="container menu__container">
                <ul class="menulink">
                    <li><a href="<?php echo ROOT_URL ?>index.php" class="active">Home</a></li>
                    <li><a href="<?php echo ROOT_URL ?>blog.php">Blog</a></li>
                    <li><a href="<?php echo ROOT_URL ?>about.php">About</a></li>
                    <li><a href="<?php echo ROOT_URL ?>services.php">Services</a></li>
                    <li><a href="<?php echo ROOT_URL ?>contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- End of Main Menu -->
        </nav>
    </header>
    <!-- End of Header -->



    