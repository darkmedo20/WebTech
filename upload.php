<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WebTech - File Upload </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    <!-- Topbar End -
     Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-9">
                    <a href="index.php"><h1 class="m-0"><span class="text-primary">Web</span>Tech</h1></a><br>
                    <h2 class="m-0">File Upload </h2><br>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <ul>
                                <li>PHP allows you to upload single and multiple files through few lines of code only.</li>
                                <li>PHP session creates unique user id for each browser to recognize the user and avoid conflict between multiple browsers.</li>
                                <li>Moreover, you can have the full control over the file to be uploaded through PHP authentication and file operation functions.</li>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                PHP $_FILES
                            </h5>
                            <ul>
                                <li>The PHP global $_FILES contains all the information of file.</li>
                                <li>By the help of $_FILES global, we can get file name, file type, file size, temp file name and errors associated with file.</li>
                                <li>Here, we are assuming that file name is filename.</li>
                                <li><span class="point">$_FILES['filename']['name']</span><br>returns file name.</li>
                                <li><span class="point">$_FILES['filename']['type']</span><br>returns MIME type of the file.</li>
                                <li><span class="point">$_FILES['filename']['size']</span><br>returns size of the file (in bytes).</li>
                                <li><span class="point">$_FILES['filename']['tmp_name']</span><br>returns temporary file name of the file which was stored on the server.</li>
                                <li><span class="point">$_FILES['filename']['error']</span><br>returns error code associated with this file.</li>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                move_uploaded_file() function
                            </h5>
                            <ul>
                                <li>The move_uploaded_file() function moves the uploaded file to a new location.</li>
                                <li>The move_uploaded_file() function check internally if the file is uploaded thorough the POST request. It moves the file if it is uploaded through the POST request.</li>
                                <li>Syntax :
                                <br>bool move_uploaded_file ( string $filename ,string $destination )</li>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                PHP FILE UPLOAD EXAMPLE : 
                            </h5>
                            <img src="img/uploadex.png" width="600">

                        </div>
                    </div>
            </div>
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
</body>
</html>
<?php echo "<style>*{background-color:" . $_SESSION["theme"] . ";}</style>"; ?>