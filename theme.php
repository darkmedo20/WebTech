<?php

session_start();

?>

<html>
    <body>
        <form action="index.php" method="POST">
            <input type="submit" name="col" value="This is my favorite color theme"><br>
            <input type="color" name="color">
        </form>
</body>
</html>
<?php echo "<style>*{background-color:" . $_SESSION["theme"] . ";}</style>"; ?>