<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WebTech - Sessions</title>
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
                    <h2 class="m-0">Sessions : </h2><br>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <h5 class="bold color_white pt-3">
                                What are PHP Sessions?
                            </h5>
                            <ul>
                                <li>PHP session is used to store and pass
                                    information from one page to another
                                    temporarily (until user close the website).</li>
                                <li>PHP session technique is widely used in
                                    shopping websites where we need to store
                                    and pass cart information e.g. username,
                                    product code, product name, product price
                                    etc from one page to another.</li>
                                <li>PHP session creates unique user id for each
                                    browser to recognize the user and avoid
                                    conflict between multiple browsers.</li>
                                    <img src="img/sess1.png" height="500" width="400"><br>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                PHP session_start() function
                            </h5>
                            <ul>
                                <li>PHP session_start() function is used to start
                                    the session. It starts a new or resumes
                                    existing session. It returns existing session if
                                    session is created already. If session is not
                                    available, it creates and returns new session.</li>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                Syntax
                            </h5>
                            <ul>
                                <li>bool session_start ( void )</li>
                                <li>Example:
                                <br>session_start();</li>
                                <li>Store information
                                <br>$_SESSION["user"]=123;
                                <br>echo $_SESSION["user"];
                                </li>
                            </ul>

                        </div>
                    </div>
                    <h2>PHP Cookies :</h2>
                    <div class="row justify-content-center  hackerFont ">
                        <div class="col-md-10">
                            <h5 class="bold color_white pt-3">
                                What are PHP Cookies?
                            </h5>
                            <ul>
                                <li>PHP cookie is a small piece of information
                                    which is stored at client browser. It is used to
                                    recognize the user.</li>
                                <li>Cookie is created at server side and saved to
                                    client browser. Each time when client sends
                                    request to the server, cookie is embedded
                                    with request. Such way, cookie can be
                                    received at the server side</li>
                                    <img src="img/cookies1.png">
                                <li>In short, cookie can be created, sent and
                                    received at server end.</li>
                                
                            </ul>
                            <h5 class="bold color_white pt-3">
                                PHP setcookie() function
                            </h5>
                            <ul>
                                <li>PHP setcookie() function is used to set cookie
                                    with HTTP response. Once cookie is set, you
                                    can access it by $_COOKIE superglobal
                                    variable.</li>
                            </ul>
                            <h5 class="bold color_white pt-3">
                                Syntax
                            </h5>
                            <ul>
                                <li>bool setcookie ( string $name [, string $value[, int $expire = 0 [, string $path[, string $domain [, bool $secure = false [, bool $httponly = false ]]]]]] )</li>
                                <li>Example:
                                <br>setcookie("CookieName", "CookieValue", time()+1*60*60);</li>
                                <li>PHP $_COOKIE superglobal variable is used to get cookie.</li>
                                <li>Example:
                                <br>$value=$_COOKIE["CookieName"];//returns cookie value</li>
                            </ul>

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