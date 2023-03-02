<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WebTech - Ajax </title>
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
                    <h2 class="m-0">AJAX </h2><br>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <ul>
                                <li>A user can continue to use the application while the client program requests information from the server in the background.</li>
                                <li>Intuitive and natural user interaction. Clicking is not required, mouse movement is a sufficient event trigger.</li>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                Why To Learn AJAX?
                            </h5>
                            <ul>
                                <li>AJAX stands for Asynchronous JavaScript and XML.</li>
                                <ol>
                                    <li>AJAX is a new technique for creating better, faster, and more interactive web applications with the help of XML, HTML, CSS, and Java Script.</li>
                                    <li>Ajax uses XHTML for content, CSS for presentation, along with Document Object Model and JavaScript for dynamic content display.</li>
                                    <li>Conventional web applications transmit information to and from the sever usingsynchronous requests. It means you fill out a form, hit submit, and get directed to a new page with new information from the server.</li>
                                    <li>With AJAX, when you hit submit, JavaScript will make a
                                        request to the server, interpret the results, and update the current screen. In the purest sense, the user would never know that anything was even transmitted to the server.</li>
                                    <li>XML is commonly used as the format for receiving server data,
                                        although any format, including plain text, can be used.</li>
                                    <li>AJAX is a web browser technology independent of web serve software.</li>

                                </ol>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                AJAX is based on Open Standards.
                            </h5>
                            <li>Browser-based presentation using HTML and Cascading Style Sheets (CSS).</li>
                            <li>Data is stored in XML format and fetched from the server.</li>
                            <li>Behind-the-scenes data fetches using XMLHttpRequest objects in the browser.</li>
                            <li>JavaScript to make everything happen.</li>
                            <h2>AJAX Technologies : </h2>
                            <h5 class="bold color_white pt-3">1-JavaScript</h5>
                            <li>JavaScript function is called when an event occurs in page.</li>
                            <h5 class="bold color_white pt-3">2-DOM</h5>
                            <li>API for accessing and manipulating structured documents,Represents the structure of XML and HTML documents.</li>
                            <h5 class="bold color_white pt-3">3-CSS</h5>
                            <li>Allows for a clear separation of the presentation style from the content and may be changed programmatically by JavaScript</li>
                            <h5 class="bold color_white pt-3">4-XMLHttpRequest</h5>
                            <li>JavaScript object that performs asynchronous interaction with the server.</li>
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