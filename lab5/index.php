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
        
            echo "<h1> Nasz system </h1>";
        
            if(isSet($_POST["wyloguj"]))
            {
                $_SESSION['zalogowany'] = 0;
                echo "wylogowano";
            }
        
        ?>
        
        <a href = "user.php">User</a> 
        <br>
        
        <form action = "logowanie.php" method = "post">
            <fieldset>
                <legend>Panel logowania:</legend>
                Login: <input type = "text" name = "login"><br>
                <br>
                Haslo: <input type = "password" name = "haslo"><br>
                <br>
                <input type = "submit" name = "zaloguj">
            </fieldset>
        </form>
        
        <br>
        
        <form action = "cookie.php" method = "get">
            <fieldset>
                <legend>Tworzenie ciasteczka:</legend>
                <label>
                     Czas: <input type = "number" name = "czas" value = "czas"><br>
                </label>
                <br>
                <input type = "submit" name = "utworzCookie" value = "utwórz cookie">
            </fieldset>
        </form>
        
        <?php
            if (isset($_COOKIE['ciasteczko'])) {
                echo "<p>Istnieje ciasteczko " . $_COOKIE['ciasteczko'] . "</p>";
            } else {
                echo "<p>Ciasteczko nie istnieje</p>";
            }
        ?>
        
        
    </body>
</html>
