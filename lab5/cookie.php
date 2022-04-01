<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            require_once("funkcje.php");
            if (isset($_GET['utworzCookie']) and isset($_GET['czas']) and is_numeric($_GET['czas'])) 
            {
                setcookie("ciasteczko", "czasowe", time() + $_GET['czas'], "/");
                echo "Ciasteczko dodane!";
            }
        ?>
        
        <br>
        
        <a href="index.php">wstecz</a>
    </body>
</html>
