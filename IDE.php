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
    textarea{
        width: 600;
        height: 1000;
        background-color:white;
    }
    iframe{
        width: 600;
        height: 1000;
        background-color: white;
    }
    button{
        color:blue;
        background-color:white;
    }
    * {
        color:blue;
    }
</style>
<body>
    <div class="container-fluid">
            <div class="row border-top px-xl-5">
                <div class="col-lg-9">
                    <a href="index.php"><h1 class="m-0"><span class="text-primary">Web</span>Tech</h1></a>
            </div>
        </div>
    </div>
    <form action="output.php" method="POST" target="frame"><fieldset>
        <!--<input type="text" name="code"><br>-->
        <textarea vlaue ="hello " name="code"></textarea>
        <button>Run</button>
    </form>
    <div>
    <iframe src="output.php" name="frame"></iframe>
    </div>

</body>
</html>