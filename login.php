
<?php 
$databaseHost = '127.0.0.1';//or localhost
$databaseName = 'webTech'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = '';  // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1><span class="name">WebTech</span> Academy</h1>
        <div class="login-box">
            <h2>Login</h2>
            <form action="loginprocess.php" method="POST">
              <div class="user-box">
                <input type="text" name="uname" required="">
                <label>Username</label>
              </div>
              <div class="user-box">
                <input type="password" name="upassword" required="">
                <label>Password</label>
              </div>
              <input class="form-submit-button" type="submit" value="Login"><br><br>
              <input type="checkbox" value="1" name="remember">keep me login:
              
              
              <?php 
                if(isset($_REQUEST["err"]))
	                $msg="Invalid username or Password";
              ?>
              <p style="color:red;">
              <?php if(isset($msg)){
	                    echo $msg;
                    }
              ?>
              </p>
            </form>
          </div>
    </body>
</html>


