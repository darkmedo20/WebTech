<?php
session_start();
session_destroy();
?>
<html>
    <body>
        <form action="sess2.php" method="POST">
            <input type="color" name="color"><br>
            <button>My fav color</button>
        </form>
    </body>
</html>
