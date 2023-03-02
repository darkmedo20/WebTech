<?php
session_start();
if(!$_SEREVER["REQUEST_METHOD"] == "POST"){
    if(!isset($_COOKIE["login"])){
        header("location:login.php");     
    }
}


?>
<?php 
$_SESSION["theme"] = $_POST["color"];
?>
<?php

// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "cv";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName) or die("connection failed");

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WebTech - Online Web Developments Courses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .job fieldset button{
        background-color: red !important; 
    }
    </style>
<body>
    <!-- Topbar Start -->
    <!-- Topbar End -
     Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-9">
                <a href="index.php"><h1 class="m-0"><span class="text-primary">Web</span>Tech</h1></a>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <a href="theme.php" ><h3 style="color:blue; text-align:right;">Theme</h3></a>
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                <h1>Our Popular Courses</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/cookies.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <a class="h5" href="sessions.php">PHP Sessions and Cookies</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/upload1.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <a class="h5" href="upload.php">File Upload</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/ajax.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <a class="h5" href="ajax.php">AJAX Technology</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/php1.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <a class="h5" href="ajax.php">PHP with AJAX</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/XML.png" alt="">
                        <div class="bg-secondary p-4">
                            <a class="h5" href="xml.php">XML Technologies</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="img/edit.jpg" alt="">
                        <div class="bg-secondary p-4">
                            <a class="h5" href="IDE.php">Practice Editor.</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="job container-fluid job py-5 px-sm-3 px-lg-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <h2 style="letter-spacing: 3px;">Put your CV here if looking for a job :</h2>
            <form action=<?php echo $_SERVER["PHP_SELF"]?> method="POST"><fieldset style="color:white;">
                <input type="file" name="cv">
                <input style="background-color:green;" type="submit" name="submit" value="upload">
            </form>

    </div>
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, Khartoum, Sudan</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+249 991 877454</p>
                        <p><i class="fa fa-envelope mr-2"></i>ahmedmostafaomer@gmail.com</p>
                        
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="sessions.php"><i class="fa fa-angle-right mr-2"></i>PHP Sessions and Cookies</a>
                            <a class="text-white mb-2" href="upload.php"><i class="fa fa-angle-right mr-2"></i>File Upload</a>
                            <a class="text-white mb-2" href="ajax.php"><i class="fa fa-angle-right mr-2"></i>AJAX Technology</a>
                            <a class="text-white mb-2" href="ajax.php"><i class="fa fa-angle-right mr-2"></i>PHP with AJAX</a>
                            <a class="text-white" href="xml.php"><i class="fa fa-angle-right mr-2"></i>XML Technologies</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">webtech.edu</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">Ahmed Almostafa</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
<?php echo "<style>*{background-color:" . $_SESSION["theme"] . ";}</style>"; ?>